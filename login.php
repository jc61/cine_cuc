<?php
session_start(); // Iniciando sesion
$error = ''; // Variable para almacenar el mensaje de error
if (isset($_POST['ingresar'])) {
  if (empty($_POST['Email']) || empty($_POST['Password'])) {
    $error = "Username or Password is invalid";
  } else {
    // Define $email y $password
    $username = $_POST['Email'];
    $password = $_POST['Password'];
    // Estableciendo la conexion a la base de datos
    include 'global/config.php'; //Contienen las variables, el servidor, usuario, contraseña y nombre  de la base de datos
    include 'global/conexion.php'; //Contiene de conexion a la base de datos
    $conexion = new mysqli('localhost', 'root', '123456', 'cine-cuc'); 
    // Para proteger de Inyecciones SQL 
    $username    = mysqli_real_escape_string($conexion, (strip_tags($username, ENT_QUOTES)));
    $password =  sha1($password); //Algoritmo de encriptacion de la contraseña http://php.net/manual/es/function.sha1.php

    $sql = "SELECT usuario, password FROM clientes WHERE usuario = '" . $username . "' and password='" . $password . "'";
    $query = mysqli_query($conexion, $sql);
    $counter = mysqli_num_rows($query);
    if ($counter == 1) {
      $_SESSION['login_user_sys'] = $username; // Iniciando la sesion
      header("location: verFunciones.php"); // Redireccionando a la pagina verFunciones.php


    } else {
      $error = "El correo electrónico o la contraseña es inválida.";
    }
  }
}
?>

