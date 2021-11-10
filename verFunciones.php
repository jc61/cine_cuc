<?php
    include 'global/config.php';
    include 'global/conexion.php';

    $conexion = new mysqli('localhost', 'root', '123456', 'cine-cuc'); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Adquirir boleto</title>
</head>

<body>
    <header>
        <div class="container">
            <h2 class="logo">CINE CUC</h2>
            <nav>
                <a href="index.php">Inicio</a>
                <a href="verFunciones.php" class="active">Comprar boleto</a>
                <a href="index.php">Cerrar sesión</a>
            </nav>
        </div>
    </header>
    <section class="vh-100 gradient-custom">
        <div class="contenedor">
            <table>
                <thead>
                    <tr>
                        <th>Nombre de la pelicula</th>
                        <th>Fecha inicio</th>
                        <th>Fecha fin</th>
                        <th>Lugar</th>
                        <th>Dirección</th>
                        <th>Cupos disponible</th>
                        <th>Poster</th>
                        <th>Comprar</th>
                    </tr>
                </thead>
                <?php
                    $sql = 'SELECT * FROM funcion INNER JOIN pelicula ON funcion.nombrePelicula = pelicula.nombrePelicula';
                    $result = $conexion->query($sql);

                    while($mostrar=mysqli_fetch_assoc($result)){
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $mostrar['nombrePelicula'] ?></td>
                        <td><?php echo $mostrar['fechaInicio'] ?></td>
                        <td><?php echo $mostrar['fechaFin'] ?></td>
                        <td><?php echo $mostrar['lugar'] ?></td>
                        <td><?php echo $mostrar['direccionLugar'] ?></td>
                        <td><?php echo $mostrar['numCupos'] ?></td>
                        <td><img src="<?php echo $mostrar['imagen'] ?>" alt="" class="image"></td>
                        <td><a href="modificar_funcion.php?idFuncion=<?php echo $mostrar['idFuncion']?>"><img id="img_tab_edit" src="Imagenes/comprar.png"/></a></td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </section>
    <script src="confirmacion.js"></script>
</body>

</html>