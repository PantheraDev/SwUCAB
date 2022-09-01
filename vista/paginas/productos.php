<?php
//require_once('conexion.php');
//require_once('consultaDatos.php');
?>


<main class="contenedor main-produc">

    <h1>Producto</h1>

    <div class="group-produc">

        <?php

        /*$prod = verPRODUCTOS();
if (!empty($prod)) :
foreach ($prod as $valores) :*/

        $prod = FormularioControlador::ctrSeleccionarRegistros('P_IMG', null, null);
        foreach ($prod as $valores) :

        ?>

            <a href="index.php?sw=prod&id=<?=$valores['id_producto'];?>">

                <div class="produc-card">

                    <img src=<?= $valores['imag_url']; ?> alt="imagen-producto" name='imagen20'>
                    <h4><?= $valores['prod_nombre']; ?></h4>
                    <p><?= $valores['prod_precio']; ?></p>

                    <!--<button id='' name="comprar" value="<?= $valores['id_producto'] ?>">Comprar</button>-->

                </div>
                
            </a>

        <?php endforeach;
        //endif; 
        ?>
    </div>

</main>