<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    echo "<script>alert('Debes iniciar sesión para comprar.'); window.location.href='login.html';</script>";
    exit;
}

$host = 'db5017003380.hosting-data.io';
$database = 'dbs13697465';
$user = 'dbu1433845';
$password = 'diegoelperpetrador_asir2025';

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Validación de datos del formulario
if (isset($_POST['product_id'], $_POST['quantity'], $_POST['product_name'], $_POST['price'])) {
    $product_id = $conn->real_escape_string($_POST['product_id']);
    $quantity = (int) $_POST['quantity'];
    $nombre_producto = $conn->real_escape_string($_POST['product_name']);
    $precio_unitario = (float) $_POST['price'];
    $id_cliente = $_SESSION['user_id'];
    $fecha = date('Y-m-d H:i:s');

    // Comprobar si hay stock suficiente
    $checkStock = $conn->query("SELECT stock FROM productos WHERE id_producto = '$product_id'");
    if ($checkStock && $checkStock->num_rows > 0) {
        $stock = $checkStock->fetch_assoc()['stock'];
        if ($stock >= $quantity) {

            // Insertar compra
            $insert = $conn->prepare("INSERT INTO ventas (fecha, id_cliente, id_producto, nombre_producto, cantidad, precio_unitario) VALUES (?, ?, ?, ?, ?, ?)");
            $insert->bind_param("siisid", $fecha, $id_cliente, $product_id, $nombre_producto, $quantity, $precio_unitario);
            $insert->execute();

            // Descontar del stock
            $conn->query("UPDATE productos SET stock = stock - $quantity WHERE id_producto = '$product_id'");

            echo "<script>alert('¡Compra realizada con éxito!'); window.location.href = 'mis_productos.php';</script>";
            exit;

        } else {
            echo "<script>alert('Stock insuficiente. Solo quedan $stock unidades.'); window.location.href = 'tienda.php';</script>";
            exit;
        }
    } else {
        echo "<script>alert('Producto no encontrado.'); window.location.href = 'tienda.php';</script>";
        exit;
    }
} else {
    echo "<script>alert('Error: Faltan datos del formulario.'); window.location.href = 'tienda.php';</script>";
    exit;
}

$conn->close();
?>
