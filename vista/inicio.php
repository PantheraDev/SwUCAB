<?php

session_start();
if (isset($_GET['sw'])) {

    if ($_GET['sw'] == 'registro' || $_GET['sw'] == 'ingreso' || $_GET['sw'] == 'salir'
    || $_GET['sw'] == 'productos'|| $_GET['sw'] == 'prod') {
        $back = 'back';
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="vista/css/style.css?v=<?php echo time(); ?>">

    <script src="https://kit.fontawesome.com/22c321cb54.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Rancho&display=swap" rel="stylesheet">

    <title>SWEET UCAB</title>
    
</head>

<body class="<?php echo $back ?>">
    <header>

        <div class="header-sup">
            <a href="index.php">
                <img id="logo" src="vista/img/Logo-SU-2.png" alt="log wapo">
            </a>

            <?php if (isset($_SESSION['validarIngreso'])) : ?>

                <nav class="nav-bar2">
                    
                    <?php if (isset($_SESSION['usuario'])) : ?>
                        <div class="btn-user">
                            <a href="index.php?sw=cuenta">
                                <i class="fa-solid fa-user"></i>
                                <p><?= $_SESSION['usuario']['usua_username']; ?></p>
                            </a>
                        </div>
                    <?php endif; ?>

                    <div class="btn-user">
                        <a href="#">
                            <p>0</p>
                            <p>Sweet Points</p>
                        </a>
                    </div>

                    <div class="btn-user">
                        <a href="carrito.php">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <p>Carrito</p>
                        </a>
                    </div>

                    <div class="btn-user">
                        <a href="index.php?sw=salir">
                            <i class="fa-solid fa-xmark"></i>
                            <p>Cerrar Sesion</p>
                        </a>
                    </div>


                    <!--<?php if ($_SESSION['rol']['rol_nombre'] === 'todo' || $_SESSION['rol']['rol_nombre'] === 'jefe de tienda') : ?>
                        <div class="btn-icon">
                            <a href="god.php">Cuenta</a>
                        </div>
                    <?php elseif ($_SESSION['rol'] === 'usuario comun') : ?>
                        <div class="btn-icon">
                            <a href="cuenta.php">Cuenta</a>
                        </div>
                    <?php else : ?>
                        <div class="btn-icon">
                            <a href="empleado.php">Cuenta</a>
                        </div>
                    <?php endif; ?>-->

                <?php else : ?>
                    <nav class="nav-bar">
                        <div class="btn-icon">
                            <a href="index.php?sw=registro">Registrarse</a>
                        </div>

                        <div class="btn-icon">
                            <a href="index.php?sw=ingreso">Inicio Sesion</a>
                        </div>
                    <?php endif; ?>

                    </nav>
        </div>
    </header>

    <?php
    if (isset($_GET['sw'])) {
        if ($_GET['sw'] == 'registro' || $_GET['sw'] == 'ingreso' || $_GET['sw'] == 'main' || $_GET['sw'] == 'salir'
        || $_GET['sw'] == 'productos'|| $_GET['sw'] == 'prod' || $_GET['sw'] == 'cuenta') {
            include 'vista/paginas/' . $_GET['sw'] . '.php';
        }
    } else {
        include 'vista/paginas/main.php';
    }


    ?>

    <footer>
        <div class="contenedor logo-centrado">
            <img id="logo" src="vista/img/Logo-SU-2.png" alt="log wapo">
        </div>
    </footer>

    <script src="controlador/js/main.js"></script>
</body>

</html>