<?php
// Estableciendo la conexion a la base de datos
include 'global/config.php';//Contienen las variables, el servidor, usuario, contraseña y nombre  de la base de datos
include 'global/conexion.php';//Contiene de conexion a la base de datos
$conexion = new mysqli('localhost', 'root', '123456', 'cine-cuc'); 
 
session_start();// Iniciando Sesion
// Guardando la sesion
$user_check=$_SESSION['login_user_sys'];
// SQL Query para completar la informacion del usuario
$ses_sql=mysqli_query($con, "select nombreCliente from clientes where usuario='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['usuario'];
if(!isset($login_session)){
mysqli_close($conexion); // Cerrando la conexion
header('Location: index.php'); // Redirecciona a la pagina de inicio
}
?>