<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <title>Funcion</title>
</head>

<?php
//Agregar funciones
include 'global/config.php';
include 'global/conexion.php';

if (isset($_POST['register'])) {

    if (!empty($_POST['nameMovie']) && !empty($_POST['dateLog']) && !empty($_POST['datend']) && !empty($_POST['place']) && !empty($_POST['address']) && !empty($_POST['cupos'])) {

        $name = $_POST['nameMovie'];
        $inicio = $_POST['dateLog'];
        $fin = $_POST['datend'];
        $lugar = $_POST['place'];
        $direccion = $_POST['address'];
        $cupos = $_POST['cupos'];


        $link = new mysqli('localhost', 'root', '123456', 'cine-cuc');

        $sql = "INSERT INTO funcion(nombrePelicula, fechaInicio, fechaFin, lugar, direccionLugar, numCupos) VALUES ('$name','$inicio', '$fin', '$lugar', '$direccion', '$cupos')";
        $result = $link->query($sql);

        if ($result) {
            $message = "Función agregada";
        } else {
            $message = "Error al ingresar datos de la informacion!";
        }
    } else {
        $message = "Todos los campos son obligatorios!";
    }
}

?>

<body>
    <header>
        <div class="container">
            <h2 class="logo">CINE CUC</h2>
            <nav>
                <a href="index.php" >Inicio</a>
                <a href="funcion.php" class="active">Crear función</a>
                <a href="funciones.php">Ver funciones</a>
                <a href="register.php">Registrarse</a>
            </nav>
        </div>
    </header>
    <main>
        <div class="peliculas">
            <div class="container">
                <form name="registerform" id="registerform" action="funcion.php" method="post">

                    <section class="vh-100 gradient-custom">
                        <div class="container py-5 h-100">
                            <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                                        <div class="card-body p-5 text-center">

                                            <div class="mb-md-5 mt-md-4 pb-5">

                                                <h2 class="fw-bold mb-2 text-uppercase">Crear funcion</h2>
                                                <p class="text-white-50 mb-5">Por favor ingrese los datos de la funcion!</p>
                                                <?php

                                                if (!empty($message)) {
                                                    echo "<p class='error'>" . $message . "</p>";
                                                }
                                                ?>

                                                <div class="form-outline form-white mb-4">
                                                    <select class="form-control form-control-lg" name="nameMovie">
                                                        <option value="">Elige una pelicula</option>
                                                        <?php
                                                        $link = new mysqli('localhost', 'root', '123456', 'cine-cuc');
                                                        $query = "SELECT * FROM pelicula";
                                                        $data = $link->query($query);

                                                        foreach ($data as $valores) :
                                                            echo '<option value="' . $valores["nombrePelicula"] . ' ">' . $valores["nombrePelicula"] . '</option>';
                                                        endforeach;
                                                        ?>
                                                    </select>
                                                    <label class="form-label" for="typeEmailX">Seleccione nombre de la pelicula</label>
                                                </div>

                                                <div class="form-outline form-white mb-4">
                                                    <input type="date" name="dateLog" id="dateLog" class="form-control form-control-lg" />
                                                    <label class="form-label" for="typeEmailX">Fecha de inicio</label>
                                                </div>

                                                <div class="form-outline form-white mb-4">
                                                    <input type="date" name="datend" id="datend" class="form-control form-control-lg" />
                                                    <label class="form-label" for="typePasswordX">Fecha fin</label>
                                                </div>

                                                <div class="form-outline form-white mb-4">
                                                    <input type="text" name="place" id="place" class="form-control form-control-lg" />
                                                    <label class="form-label" for="typePasswordX">Lugar</label>
                                                </div>

                                                <div class="form-outline form-white mb-4">
                                                    <input type="text" name="address" id="address" class="form-control form-control-lg" />
                                                    <label class="form-label" for="typePasswordX">Dirección</label>
                                                </div>

                                                <div class="form-outline form-white mb-4">
                                                    <input type="number" name="cupos" id="cupos" class="form-control form-control-lg" />
                                                    <label class="form-label" for="typePasswordX">Numero de cupos</label>
                                                </div>


                                                <button class="btn btn-outline-light btn-lg px-5" type="submit" name="register" id="register">Registrar</button>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </form>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>