<main class="contenedor main-produc-1">

    <?php /*if (isset($_POST['comprar'])) :
        $codigo = $_POST['comprar'];
        $obj = new conex();
        $sql = ("SELECT P.PROD_NOMBRE,P.PROD_PRECIO,I.IMAG_URL,C.CARA_DESCRIPCION
        FROM PRODUCTO P, IMAGEN I, CARAMELO C
        WHERE P.ID_PRODUCTO=I.ID_IMAGEN
        AND C.ID_CARAMELO=P.FK_CARAMELO
        AND P.ID_PRODUCTO=$codigo;");
        $ver = $obj->consultar($sql);
        if ($ver && $ver->rowCount() === 1) {
            $resultado = $ver->fetch();
        }

        $sql2 = ("SELECT S.SABO_NOMBRE,C.ID_CARAMELO
        FROM SABOR S , CARAMELO C ,SABOR_CARAMELO AS SC
        WHERE S.ID_SABOR=SC.FK_SABOR
        AND C.ID_CARAMELO=SC.FK_CARAMELO
        AND C.ID_CARAMELO=$codigo;");
        $sab = $obj->consultar($sql2);
        if ($sab && $sab->rowCount() >= 1) {
            $sabores = $sab->fetchAll();
        } else {
            $sabores = array();
            $sabores['sabo_nombre'] = 'clasico';
        }*/
    ?>

    <?php

    $resultado = FormularioControlador::ctrSeleccionarRegistros('P_IMG', 'id_producto', $_GET['id']);

    //foreach($prod as $resultado):

    ?>

    <img src="<?= $resultado['imag_url']; ?>" alt="imagen-producto">
    <div class="detalle-produc">
        <h1><?= $resultado['prod_nombre']; ?></h1>
        <ul>
            <li>
                Clasificación: <span><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span>
            </li>
            <li>
                Precio: <span><?= $resultado['prod_precio']; ?></span>
            </li>
        </ul>
        <div id="pedido">

            <h2>Pedido</h2>
            <form method="POST">
                <div class="sep-sabor">
                    <?php //foreach ($sabores as $lista) : 
                    ?>
                    <!--<div>
                                <input type="checkbox" name="sabor1" id="sabor1" value="<?= $lista['sabo_nombre']; ?>">
                                <label for="sabor1"><?= $lista['sabo_nombre']; ?></label>
                            </div>-->
                    <div>
                        <input type="number" class="input-number" min="0" name="canti1" id="canti1">
                        <label for="canti1">Cantidad</label>
                    </div>
                    <?php //endforeach; 
                    ?>
                </div>

                <div class="btn-añadir">
                    <button id="btn-añadir23">Agregar</button>
                </div>
                
            </form>

        </div>
        <div id="dbtn" class="btn-añadir">
            <button id="btn-añadir2">Comprar</button>
        </div>
    </div>

    <?php

    $desc = FormularioControlador::ctrSeleccionarRegistros('CARAMELO','ID_CARAMELO',$_GET['id']);

    ?>
    <section class="desc-produc">
        <h2>Descripcion:</h2>
        <p><?= $desc['cara_descripcion']; ?></p>
    </section>
    <?php //endif; 
    ?>
</main>

<article class="sugerencias contenedor">
    <h3>Sugerencias</h3>
    <div class="group-produc">
        <a href="producto.php">
            <div class="produc-card">
                <img src="vista/img/caramelos-de-fruta.jpg" alt="imagen-producto">
                <h4>El Original</h4>
                <p>Precio: 20 Bs</p>
            </div>
        </a>
        <a href="producto.php">
            <div class="produc-card">
                <img src="vista/img/caramelos-de-fruta.jpg" alt="imagen-producto">
                <h4>El Original</h4>
                <p>Precio: 20 Bs</p>
            </div>
        </a>
        <a href="producto.php">
            <div class="produc-card">
                <img src="vista/img/caramelos-de-fruta.jpg" alt="imagen-producto">
                <h4>El Original</h4>
                <p>Precio: 20 Bs</p>
            </div>
        </a>
    </div>
</article>

<?php

    echo "<script>
            let btn = document.getElementById('btn-añadir2');
            let ped = document.getElementById('pedido');
            let divbtn = document.getElementById('dbtn');

            ped.style.display = 'none';

            btn.addEventListener('click',function(){
                
                ped.style.display = 'block';
                divbtn.style.display = 'none';
            });
    </script>";

?>