<?php

if (isset($_SESSION['validarIngreso'])) {
    /*echo '<script>
    window.location = "index.php?=main";
    </script>';
    return;*/
    if ($_SESSION["validarIngreso"] != 'ok') {
        echo '<script>
        window.location = "index.php?sw=ingreso";
        </script>';
        return;
    }
}

?>
<section>

    <div id="slider1" class="slider">
        <img src="vista/img/Caramelos.svg" alt="imagen caramelos">
        <div class="texto">
            <h2>Choco Candy</h2>
            <p>Saborea al lider en caramelos de Chocolate</p>
            <p>Contamos con una amplia variedad de sabores, disfrutalos</p>

            <div class="btn-a">
                <a href="index.php?sw=productos">Ver mas</a>
            </div>
        </div>
    </div>

</section>

<main id="main-index">
    <div class="main contenedor">
        <img src="vista/img/Tiendas de chuches_.png" alt="tienda chuches">

        <div class="texto">
            <h1>¡Bienvenidos a nuestra tienda!</h1>
            <p>El caramelo se elabora disolviendo azúcar en agua o leche para formar un almíbar, que se hierve hasta que alcanza la concentración deseada o comienza a caramelizarse. Los dulces vienen en una amplia variedad de texturas, desde blandas y masticables hasta duras y quebradizas. La textura del caramelo depende de los ingredientes</p>
        </div>
    </div>
</main>

<section id="fondo-gomita">
    <div class="contenedor gomitas">
        <h3>¡Registrate y endulza tu vida!</h3>
        <div class="btn-a">
            <a href="index.php?sw=registro">Registrarse</a>
        </div>
    </div>
</section>

<section id="revista">
    <div class="promos contenedor">
        <h2>Sweet Flyer</h2>
        <p>No te pierdas nuestras ofertas en nuestra Sweet Flyer</p>
        <div class="grupo-promos">

            <div class="promo-card">
                <img src="vista/img/paletas-corazon.png" alt="paleats corazon">
                <h4>Chupeta de Corazon</h4>
                <p>Precio: 39 Bs <span>-10%</span></p>
            </div>

            <div class="promo-card">
                <img src="vista/img/bolitas-rojas.jpg" alt="">
                <h4>Ricura</h4>
                <p>Precio: 32 Bs <span>-25%</span></p>
            </div>

            <div class="promo-card">

                <img src="vista/img/caramelos-de-fruta.jpg" alt="">
                <h4>El Original</h4>
                <p>Precio: 33 Bs <span>-50%</span></p>
            </div>


        </div>

        <div class="btn-a">
            <a href="sweetflyer.php">Ver mas</a>
        </div>

    </div>
</section>