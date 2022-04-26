<?php
session_start();

if (!$_SESSION['usuario']) {
  header("Location: login.php");
}

require "conexion.php";

$conn=conectar();

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$celular = $_POST['celular'];
$direccion = $_POST['direccion'];
$sql = "INSERT INTO operaciones(codigo_cliente, nombre, apellido, celular, direccion) VALUES ('$nombre', '$apellidos', '$celular', '$direccion')";
$ejecucion = mysqli_query($conn, $sql);
 

?>


<!DOCTYPE html>
<html>
<head>
<title>Inventary-DC</title>
<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>

<nav class="header">
  <h1 style="display:inline;">Domicilios</h1>
  <a href="inicio.php">Inicio</a>
  <a href="usuarios.php">Usuarios</a>
  <a href="clientes.php">Clientes</a>
  <a href="inventario.php">Inventario</a>
  <a href="Domicilios.php">Domicilios</a>

</nav>
  <div class="form1">
    <h1>Registro</h1>
    <form action="usuarios.php"method="post">
    	<label for="code"><b>Codigo cliente:</b></label><br>
      <input type="number" id="codigo" name="codigo" /><br>
      <label for="name"><b>Nombre:</b></label><br>
      <input type="text" id="nombre" name="nombre" /><br>
      <label for="lastname"><b>Apellidos:</b></label><br>
      <input type="text" id="apellidos" name="apellidos"/><br>
      <label for="cellphone"><b>Celular:</b></label><br>
      <input type="number" id="celular" name="celular" /><br>
      <label for="direction"><b>Dirección:</b></label><br>
      <input type="text" id="direction" name="direccion" /><br>
          <br>
    <input type="submit" value="Registrar usuario" class="register/button"/>
    </form>
  </div>

  <iframe src="frame-domicilios.php" title="description" class="consulta"></iframe>

</body>
</html>