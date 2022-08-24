<nav class="nav-bar2">

    <?php if (isset($_SESSION['usuario'])) : ?>
        <div class="btn-user">
            <a href="#">
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
        <a href="cerrarSesion.php">
            <i class="fa-solid fa-xmark"></i>
            <p>Cerrar Sesion</p>
        </a>
    </div>

</nav>