<?php
//require_once('errores.php');
?>

<main class="contenedor inicio-sesion">
    <h1>¡Bienvenido!</h1>

    <?php if (isset($_GET['r'])) : ?>
        <div class="alert alert-exito">
            <p>
                REGISTRO EXITOSO!!
            </p>
        </div>
    <?php endif; ?>

    <!--<?php if (isset($_SESSION['error_login'])) : ?>
        <div class="alert alert-fracaso">
            <p>
                <?= $_SESSION['error_login']; ?>
            </p>

        </div>
    <?php endif; ?>-->


    <form method="POST">
        <div class="input-group">

            <input required class="input" type="email" value="" name="ingresoEmail" id="email">
            <label class="input-label" for="email">Direccion de correo electronico</label>
            <?php //echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'email') : ''; ?>
        </div>

        <div class="input-group">

            <input required class="input" type="password" value="" name="ingresoClave" id="clave">
            <label class="input-label" for="clave">Contraseña</label>
            <?php //echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'calve') : ''; ?>
        </div>

        <?php

            $ingreso = new FormularioControlador();
            $ingreso->ctrIngreso();

            

        ?>

        <div class="centrar-btn">
            <input type="submit" value="Ingresar" id="btn-ingreso" class="btn">
            <?php //borrarErrores(); ?>
        </div>
    </form>

</main>

<script src="js/main.js"></script>