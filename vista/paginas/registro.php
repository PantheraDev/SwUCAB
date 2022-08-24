<?php
//require_once('errores.php');
?>

<main class="contenedor registro">
    <h1>Crea tu cuenta</h1>
    <!--<?php if (isset($_SESSION['completado'])) : ?>
        <div class="alert-exito">
            <p>
                <?= $_SESSION['completado'] ?>
            </p>
        </div>
    <?php elseif (isset($_SESSION['errores']['registro'])) : ?>
        <div class="alert-fracaso">
            <p>
                <?= $_SESSION['errores']['registro'] ?>
            </p>
        </div>
    <?php endif; ?>
    -->
    <form id="form-inicio" method="POST">

        <div class="input-group">

            <input required class="input" type="email" value="" name="email" id="email">
            <label class="input-label" for="email">Direccion de correo electronico</label>
            <?php //echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'email') : '';
            ?>
        </div>

        <div class="input-group">

            <input required class="input" type="text" value="" name="user" id="user">
            <label class="input-label" for="user">Usuario</label>
            <?php //echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'user') : '';
            ?>
        </div>

        <div class="input-group">

            <input required class="input" type="password" value="" name="clave" id="clave">
            <label class="input-label" for="clave">Contraseña</label>
            <?php //echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'clave') : '';
            ?>
        </div>

        <?php

            $registro = FormularioControlador::ctrRegistro();

            if($registro == 'ok'){
                echo '<script>
                if(window.history.replaceState){
                    window.history.replaceState(null,null,window.location.href);
                }
                </script>';
                echo '<h4>Registro exitoso</h4>';
            }

        ?>

        <div class="centrar-btn">
            <input type="submit" value="Continuar" id="btn-registro" class="btn" name="guardar">
        </div> 
        <?php //borrarErrores();
                ?>
    </form>

</main>

<script src="js/main.js"></script>