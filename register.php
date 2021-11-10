<?php
include 'global/config.php';
include 'global/conexion.php';
?>

<?php

if (isset($_POST['register'])) {

    if (!empty($_POST['Name']) && !empty($_POST['Email']) && !empty($_POST['Password'])) {

        $name = $_POST['Name'];
        $email = $_POST['Email'];
        $password = $_POST['Password'];


        $link = new mysqli('localhost', 'root', '123456', 'cine-cuc');
        $query = "SELECT usuario FROM clientes WHERE usuario='$email'";
        $result = $link->query($query);

        if ($result === true) {

            $sql = "INSERT INTO clientes(nombreCliente, usuario, password) VALUES ('$name','$email', '$password')";
            $result = $link->query($sql);

            if ($result) {
                $message = "Cuenta creada correctamente";
            } else {
                $message = "Error al ingresar datos de la informacion!";
            }
        } else {
            $message = "El correo ya existe! Por favor, intenta con otro!";
        }
    } else {
        $message = "Todos los campos son obligatorios!";
    }
}
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link rel="stylesheet" href="css/estilos.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

<body>
    <header>
        <div class="container">
            <h2 class="logo">CINE CUC</h2>
            <nav>
                <a href="index.php">Inicio</a>
                <a href="funcion.php">Crear funcion</a>
                <a href="funciones.php">Ver funciones</a>
                <a href="register.php" class="active">Registrarse</a>
            </nav>
        </div>
    </header>
    <main>
        <div class="peliculas">
            <div class="container">
                <form name="registerform" id="registerform" action="register.php" method="post">

                    <section class="vh-100 gradient-custom">
                        <div class="container py-5 h-100">
                            <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                                        <div class="card-body p-5 text-center">

                                            <div class="mb-md-5 mt-md-4 pb-5">
                                                <?php

                                                if (!empty($message)) {
                                                    echo "<p class='error'>" . $message . "</p>";
                                                }
                                                ?>
                                                <h2 class="fw-bold mb-2 text-uppercase">Registro</h2>
                                                <p class="text-white-50 mb-5">Por favor ingrese su usuario y contraseña!</p>

                                                <div class="form-outline form-white mb-4">
                                                    <input type="text" name="Name" id="Name" class="form-control form-control-lg" />
                                                    <label class="form-label" for="typePasswordX">Nombre</label>
                                                </div>

                                                <div class="form-outline form-white mb-4">
                                                    <input type="email" name="Email" id="Email" class="form-control form-control-lg" />
                                                    <label class="form-label" for="typeEmailX">Email</label>
                                                </div>

                                                <div class="form-outline form-white mb-4">
                                                    <input type="password" name="Password" id="Password" class="form-control form-control-lg" />
                                                    <label class="form-label" for="typePasswordX">Contraseña</label>
                                                </div>


                                                <button class="btn btn-outline-light btn-lg px-5" type="submit" name="register" id="register">Registrar</button>



                                            </div>

                                            <div>
                                                <p class="mb-0">Ya tienes una cuenta? <a href="index.php" class="text-white-50 fw-bold">Ingresar</a></p>
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