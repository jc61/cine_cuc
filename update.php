
<?php

include 'global/config.php';
include 'global/conexion.php';

if (!empty($_POST['nameMovie']) && !empty($_POST['dateLog']) && !empty($_POST['datend']) && !empty($_POST['place']) && !empty($_POST['address']) && !empty($_POST['cupos'])) {

    
    modificarFuncion($_POST['idFuncion'], $_POST['nameMovie'], $_POST['dateLog'], $_POST['datend'], $_POST['place'], $_POST['address'], $_POST['cupos']);
    
    echo "<script type='text/javascript'>
        alert('Funcion modificada!');
        window.location.href = 'funciones.php';
    </script>";
} else {
    echo "<script type='text/javascript'>
            alert('Error en actulizar los datos');
            window.location.href = 'funciones.php';
        </script>";
}



function modificarFuncion($idFuncion, $nombrePelicula, $fechaInicio, $fechaFin, $lugar, $direccion, $numCupos)
{

    $conexion = new mysqli('localhost', 'root', '123456', 'cine-cuc');
    $sql = "UPDATE funcion SET nombrePelicula = '$nombrePelicula', fechaInicio='$fechaInicio', 
            fechaFin='$fechaFin', lugar='$lugar', direccionLugar='$direccion', 
            numCupos='$numCupos' WHERE idFuncion='$idFuncion'";
    $conexion->query($sql) or die("Error a actualizar datos" . mysqli_error($conexion));
}

?>