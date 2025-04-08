<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    echo "<script>alert('Debe iniciar sesión para ver sus productos.'); window.location.href='login.html';</script>";
    exit;
}

$host_name = 'db5017003380.hosting-data.io';
$database = 'dbs13697465';
$user_name = 'dbu1433845';
$password = 'diegoelperpetrador_asir2025';

$conn = new mysqli($host_name, $user_name, $password, $database);
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

$correo = $_SESSION['usuario'];

$query = "SELECT p.imagen, v.nombre_producto, v.cantidad, v.precio_unitario, v.fecha
          FROM ventas v
          JOIN clientes c ON v.id_cliente = c.id_cliente 
          JOIN productos p ON v.id_producto = p.id_producto
          WHERE c.correo = ?
          ORDER BY v.fecha DESC";

$stmt = $conn->prepare($query);
$stmt->bind_param('s', $correo);
$stmt->execute();
$result = $stmt->get_result();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>My Products - Dog Products Store</title>
    <link rel="stylesheet" href="home.css">
    <style>
        .products-container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            justify-content: center;
        }

        .product-card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            padding: 20px;
            width: 220px;
            text-align: center;
            transition: transform 0.2s ease;
        }

        .product-card:hover {
            transform: scale(1.02);
        }

        .product-card img {
            width: 100%;
            height: 280px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 12px;
        }

        .product-card h3 {
            margin: 10px 0;
            font-size: 1.2rem;
            color: #333;
        }

        .product-card p {
            margin: 6px 0;
            color: #555;
        }

        header h1 {
            margin: 20px 0;
        }

        .content h2 {
            text-align: center;
            color: #333;
        }
    </style>
</head>
<body>
<header>
    <h1>My Products</h1>
</header>

<nav>
    <div class="left-nav">
        <a href="index.php">Home</a>
        <a href="tienda.php">Products</a>
        <a href="aboutus.php">About Us</a>
        <a href="mis_productos.php">My Products</a>
    </div>
    <div class="right-nav">
        <a href="logout.php">Logout</a>
    </div>
</nav>

<div class="content">
    <h2>Purchase History</h2>
    <div class="products-container">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $total = $row['precio_unitario'] * $row['cantidad'];
                echo "<div class='product-card'>";
                echo "<img src='" . htmlspecialchars($row['imagen']) . "' alt='" . htmlspecialchars($row['nombre_producto']) . "'>";
                echo "<h3>" . htmlspecialchars($row['nombre_producto']) . "</h3>";
                echo "<p>Cantidad: " . $row['cantidad'] . "</p>";
                echo "<p>Precio unitario: " . number_format($row['precio_unitario'], 2) . " €</p>";
                echo "<p><strong>Total:</strong> " . number_format($total, 2) . " €</p>";
                echo "<p><em>Fecha: " . $row['fecha'] . "</em></p>";
                echo "</div>";
            }
        } else {
            echo "<p style='text-align:center;'>No has comprado ningún producto todavía.</p>";
        }
        ?>
    </div>
</div>

</body>
</html>
<?php
$stmt->close();
$conn->close();
?>
