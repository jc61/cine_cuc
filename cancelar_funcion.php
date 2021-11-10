<?php

include 'global/config.php';
include 'global/conexion.php';

$conexion = new mysqli('localhost', 'root', '123456', 'cine-cuc');

$idFuncion = $_GET['idFuncion'];

$cancelar = "DELETE FROM funcion WHERE idFuncion='$idFuncion'";

$resultado = mysqli_query($conexion, $cancelar);

if($resultado){
    header("Location: funciones.php");
}else{
    echo "<script type='text/javascript'>
            alert('Error en cancelar la funcion');
            window.location.href = 'funciones.php';
        </script>";
}