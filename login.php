<?php

session_start();

/*relizando la consulta*/

require "conexion.php";

$conn=conectar();

if ($_POST['usuario'] && $_POST['password']) {
  $username = $_POST['usuario'];
  $password = $_POST['password'];
  $sql = "SELECT * FROM usuario WHERE usuario = '$username' AND contrasenia = '$password'";
  $result = mysqli_query($conn, $sql);
  if (get_class($result) == "mysqli_result"){
    $row = mysqli_fetch_assoc($result);
    $_SESSION['usuario'] = $row['usuario'];
    header("Location: inicio.php");
  }
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Login Doctor Cell</title>
<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>

  <div class="login-box">
    
    <img class="avatar" src="logo.jpg" alt="logo">

    <h1>Login</h1>

    <form action="login.php"method="post">

      <!--username-->
      <label for="username">Usuario</label>
      <input type="text" placeholder="Ingresa tu usuario" name="usuario">

      <!--password-->
      <label for="password">Contraseña</label>
      <input type="password" placeholder="Ingresa tu contraseña" name="password">

      <input type="submit" value="Iniciar sesión">
    </form>

<!--<div class="form">
  <div class="login-header">
    <h1>Login</h1>
  </div>
  <form action="login.php"method="post">
  	<label for="username"><b>Usuario:</b></label><br>
    <input type="text" id="username" name="usuario" /><br>
    <label for="password"><b>Contraseña:</b></label><br>
    <input type="password" id="password" name="password" /><br>
    <br>
    <input type="submit" value="Login" class="login-button"/>
  </form>
</div>

<footer>Todos los derechos reservados PARIAS®</footer>-->

</body>
</html>