<?php
 $host_name = 'db5017003380.hosting-data.io';
 $database = 'dbs13697465';
 $user_name = 'dbu1433845';
 $password = 'diegoelperpetrador_asir2025';

$conn = new mysqli($host_name, $user_name, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$sql = "INSERT INTO clientes (nombre, apellidos, telefono, correo, contrasena) VALUES ('$nombre', '$apellidos', '$telefono', '$correo', '$contrasena')";

if ($conn->query($sql) === TRUE) {
    echo "<script> window.location.href='index.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
