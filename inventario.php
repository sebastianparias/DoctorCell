<?php
session_start();

if (!$_SESSION['usuario']) {
	header("Location: login.php");
}

require "conexion.php";

$conn = conectar();

$codigo = $_POST['codigo'];
$valor = $_POST['valor'];
$fecha = $_POST['fecha'];
$sql = "INSERT INTO inventario(codigo, valor, fecha) VALUES ('$codigo', '$valor', '$fecha')";
$ejecucion = mysqli_query($conn, $sql);
 

?>

<!DOCTYPE html>
<html>
<head>
<title>Inventary-DC</title>
<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>

<nav>
  <h1 style="display:inline;">Inventario</h1>
  <a href="inicio.php">Inicio</a>
  <a href="usuarios.php">Usuarios</a>
  <a href="clientes.php">Clientes</a>
  <a href="inventario.php">Inventario</a>
  <a href="Domicilios.php">Domicilios</a>



</nav>

<div class="form1">
  <h1>Productos</h1>
  <form action="prestamos.php"method="post">
  	<label for="code"><b>codigo :</b></label><br>
    <input type="number" id="codigo" name="codigo" /><br>
    <label for="cliente"><b>nombre :</b></label><br>
    <input type="text" id="cliente" name="codigo" /><br>
    <label for="valor"><b>descripcion:</b></label><br>
    <input type="text" id="valor" name="valor" /><br>
    <label for="date"><b>cantidad:</b></label><br>
    <input type="date" id="valor" name="fecha" /><br> 
    <br>
    <input type="submit" value="Registrar prestamo" class="register/button"/>
  </form>
</div>

<iframe src="frame-inventario.php" title="description" class="consulta"></iframe>


</body>
</html>