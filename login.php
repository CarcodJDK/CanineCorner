<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$host = 'db5017003380.hosting-data.io';
$database = 'dbs13697465';
$user = 'dbu1433845';
$password = 'diegoelperpetrador_asir2025';

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $stmt = $conn->prepare("SELECT id_cliente, contrasena FROM clientes WHERE correo = ?");
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $row = $result->fetch_assoc()) {
        if ($contrasena === $row['contrasena']) {
            $_SESSION['usuario'] = $correo;
            $_SESSION['user_id'] = $row['id_cliente'];
            header("Location: index.php");
            exit;
        } else {
            echo "<script>alert('Contraseña incorrecta.'); window.location.href='login.php';</script>";
        }
    } else {
        echo "<script>alert('Usuario no encontrado.'); window.location.href='login.php';</script>";
    }

    $stmt->close();
}
$conn->close();
?>