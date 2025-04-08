<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="estilomoderno.css">
	<meta charset=utf-8>
	<link rel="icon" type="image/x-icon" href="favicon.ico">
<style>
	img.producto {
		height: 40px;
		width: 40px;
	}
</style>
</head>
<body>
<?php
	$user = "project";
	$pass = "Proyecto2025";
	$server = "localhost";
	$dbname = "project";
	$table = "carro";





	$id = $_POST['user'];
	echo $id;
	$mysqli = new mysqli($server, $user, $pass, $dbname);

	if ($mysqli->connect_error) {
	    die("Conexión fallida: " . $mysqli->connect_error);
	}

	$sql = "SELECT * FROM carro";
	$result = $mysqli->query($sql);



		$result = $mysqli->query("SELECT *,(cantidad*precio) AS total FROM carro JOIN productos ON ID_producto=ID WHERE ID_user=$id;");
		while ($row = $result->fetch_assoc()) {
			$idu = $row['ID_user'];
			$idp = $row['ID_producto'];
			$npr = $row['nombre'];
			$can = $row['cantidad'];
			$total = $row['total'];
			echo "$idu, $idp, $can";
			echo "<br>";
			$sql = "INSERT INTO compra (ID_user,ID_producto,fecha,cantidad) VALUES ($idu,$idp,CURDATE(),$can)";
			$contenido = "Producto: $npr, Cantidad: $can, Total: $total";
			$sql_factura = "INSERT INTO facturas (compra_id, cliente_id, total, fecha, contenido) VALUES ($idp, $idu, $total, CURDATE(), '$contenido')";
			echo "$contenido";
			if (mysqli_query($mysqli, $sql_factura)) {
			    echo "Factura creada exitosamente";
			} else {
		    		echo "Error: " . $sql_factura . "<br>" . mysqli_error($mysqli);
			}
			if (mysqli_query($mysqli, $sql)) {
				echo "New record created successfully";
			} else {
			        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
			}
		}
		$sql = "DELETE FROM carro WHERE ID_user=$id";
		if (mysqli_query($mysqli, $sql)) {
		        echo "Record deleted successfully";
		}

		echo "check";
		$result = $mysqli->query("SELECT * FROM users WHERE ID=$id");
		while ($row = $result->fetch_assoc()) {
			echo '<form action="login.php" method="POST" id="login">';
			echo "<input value='" . $row['login'] . "' id='user' name='user' class='hide'><br>";
			echo "<input value='" . $row['password'] . "' id='password' name='password' class='hide'><br>";
			echo "</form>";
		}



	echo "<script type='text/javascript'>
		alert('Compra finalizada correctamente');
		document.getElementById('login').submit();
	</script>";
?>
</body>
</html>
