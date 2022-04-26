<?php

session_start();

/*relizando la consulta*/

require "conexion.php";

?>
<!DOCTYPE html>
<html>
  <link rel="stylesheet" type="text/css" href="EstiloLogin.css">
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
<div class="login">
  <div class="login-header">
    <h1>Login</h1>
  </div>
  <form action="login.php"method="post" class="form">
  	<label for="username"><b>Usuario:</b></label><br>
    <input type="text" id="username" name="usuario" /><br>
    <label for="password"><b>Contraseña:</b></label><br>
    <input type="password" id="password" name="password" /><br>
    <br>
    <input type="submit" value="Login" class="login-button"/>
  </form>
</div>

<footer>Todos los derechos reservados PARIAS®</footer>


