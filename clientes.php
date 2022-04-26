<?php
session_start();

if (!$_SESSION['usuario']) {
	header("Location: login.php");
}

require "conexion.php";

$conn=conectar();

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$celular = $_POST['celular'];
$direccion = $_POST['direccion'];
$sql = "INSERT INTO clientes(codigo, nombres, apellidos, celular, direccion) VALUES ('$nombres', '$apellidos', '$celular', '$direccion')";
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
  <h1 style="display:inline;">Clientes</h1>
  <a href="inicio.php">Inicio</a>
  <a href="usuarios.php">Usuarios</a>
  <a href="clientes.php">Clientes</a>
  <a href="inventario.php">Inventario</a>
  <a href="Domicilios.php">Domicilios</a>


</nav>
  <div class="form1">
    <h1>Registro</h1>
    <form method="post" action="clientes.php">
  	  <label for="username"><b>Nombres:</b></label><br>
      <input type="text" id="username" name="nombres" /><br>
      <label for="lastname"><b>Apellidos:</b></label><br>
      <input type="text" id="lastname" name="apellidos" /><br>
      <label for="cellphone"><b>Celular:</b></label><br>
      <input type="number" id="Cellphone" name="celular" /><br>
      <label for="direction"><b>Direccion:</b></label><br>
      <input type="text" id="direction" name="direccion" /><br>    
    <br>
    <input type="submit" value="Registrar" class="register/button"/>
    </form>
  </div>

  <iframe src="frame-clientes.php" title="description" class="consulta"></iframe>

</body>
</html>