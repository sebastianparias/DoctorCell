<?php
session_start();

if (!$_SESSION['usuario']) {
  header("Location: login.php");
}

require "conexion.php";

/*
$fecha = $_POST['fecha'];
$cantidad = $_POST['cantidad'];
$cliente = $_POST['codigocliente'];
$sql = "INSERT INTO operaciones(codigo, fecha, cantidad) VALUES ('$cliente', '$fecha', '$cantidad')";
$ejecucion = mysqli_query($conn, $sql);
 */

?>


<!DOCTYPE html>
<html>
<head>
<title>Inventary-DC</title>
<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>

<h1 style="display:inline; " >Doctor Cell</h1>
<nav class="cabecera" style="display:inline-block; word-spacing: 2.0em;">
  <a href="inicio.php">Inicio</a>
  <a href="usuarios.php">Usuarios</a>
  <a href="clientes.php">Clientes</a>
  <a href="inventario.php">Inventario</a>
  <a href="Domicilios.php">Domicilios</a>


</nav>

	<table class="inicio">
		<th>Cobrado el día de hoy</th>
	</table>

</body>
</html>