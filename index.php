<?php
include 'login.php';
if (isset($_SESSION['login_user_sys'])) {
    header("location: verFunciones.php");
}
?>
<!DOCTYPE HTML>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Iniciar sesión</title>
</head>

<body>
    <header>
        <div class="container">
            <h2 class="logo">CINE CUC</h2>
            <nav>
                <a href="index.php" class="active">Inicio</a>
                <a href="verFunciones.php">Comprar boleto</a>
                <a href="register.php">registrarse</a>
                <a href="funcion.php">Crear funcion</a>
            </nav>
        </div>
    </header>
    <form action="" method="POST" name="loginform" id="loginform">
        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-dark text-white" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">

                                <div class="mb-md-5 mt-md-4 pb-5">

                                    <h2 class="fw-bold mb-2 text-uppercase">Acceso</h2>
                                    <p class="text-white-50 mb-5">Por favor ingrese su usuario y contraseña!</p>
                                    <?php

                                    if (!empty($error)) {
                                        echo "<p class='error'>" . $error . "</p>";
                                    }
                                    ?>

                                    <div class="form-outline form-white mb-4">
                                        <input type="email" name="Email" id="Email" class="form-control form-control-lg" />
                                        <label class="form-label" for="typeEmailX">Email</label>
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <input type="password" name="Password" id="Password" class="form-control form-control-lg" />
                                        <label class="form-label" for="typePasswordX">Contraseña</label>
                                    </div>



                                    <button class="btn btn-outline-light btn-lg px-5" type="submit" name="ingresar" id="ingresar">Iniciar</button>



                                </div>

                                <div>
                                    <p class="mb-0">No tienes una cuenta? <a href="register.php" class="text-white-50 fw-bold">Registrarse</a></p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>