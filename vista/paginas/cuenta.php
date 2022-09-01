<main class="contenedor main-cuenta">
    <div id="usuario">

        <h1>Tu Cuenta</h1>
        <section id="datos-perfil">
            <h2>Perfil</h2>
            <ul>
                <li>Usuario: <span><?= $_SESSION['usuario']['usua_username']; ?></span></li>
                <li>Correo: <span></span><?= $_SESSION['usuario']['usua_correo']; ?></li>
            </ul>
        </section>

        <section id="datos-contac">

            <h2>Datos de Contacto</h2>
            <ul id="datos-mostrados">


                <li>Tipo de Persona: <span></span></li>
                <li>Primer nombre: <span></span></li>
                <li>Segundo Nombre: <span></span></li>
                <li>Primer apellido: <span></span></li>
                <li>Segundo Apellido: <span></span></li>
                <li>Cedula: <span></span></li>
                <li>RIF: <span></span></li>
                <li>Direccion: <span></span></li>

            </ul>

            <form id="act-datos-contac" method="POST">

                <fieldset id="select-p">
                    <legend>Tipo de persona</legend>
                    <div>
                        <input type="radio" name="persona-n" id="persona-n" value="off">
                        <label for="persona-n">Persona Natural</label>
                    </div>
                    <div>
                        <input type="radio" name="persona-j" id="persona-j" value="off">
                        <label for="persona-j">Persona Juridica</label>
                    </div>
                </fieldset>


                <form action="" method="post">
                    <fieldset id="datos-pj" class="orden-inputs">

                        <legend>Datos de la persona juridica</legend>
                        <div class="aux-grid">
                            <div class="input-group">

                                <input required class="input" type="text" value="" name="deno-com" id="deno-com">
                                <label class="input-label" for="deno-com">Denominacion Comercial
                                </label>
                            </div>
                            <div class="campo input-group">

                                <input required class="input" type="text" value="" name="razon-s" id="razon-s">
                                <label class="input-label" for="razon-s">Razon Social
                                </label>
                            </div>
                            <div class="campo input-group">

                                <input required class="input" type="text" value="" name="rif" id="rif">
                                <label class="input-label" for="rif">RIF
                                </label>
                            </div>
                            <div class="campo input-group">

                                <input required class="input" type="text" value="" name="tele-ppal" id="tele-ppal">
                                <label class="input-label" for="tele-ppal">Telefono Principal
                                </label>
                            </div>
                            <div class="campo input-group">

                                <input required class="input" type="text" value="" name="tele-sec" id="tele-sec">
                                <label class="input-label" for="tele-sec">Telefono Secundario
                                </label>
                            </div>
                            <div class="campo input-group">

                                <input required class="input" type="text" value="" name="direc-fisica-ppal" id="direc-fisica-ppal">
                                <label class="input-label" for="direc-fisica-ppal">Direccion fisica principal
                                </label>
                            </div>
                            <div class="campo input-group">

                                <input required class="input" type="text" value="" name="direc-fiscal" id="direc-fiscal">
                                <label class="input-label" for="direc-fiscal">Direccion fiscal
                                </label>
                            </div>
                            <div class="campo input-group">

                                <input required class="input" type="url" value="" name="web" id="web">
                                <label class="input-label" for="web">Pagina web
                                </label>
                            </div>
                            <div class="campo input-group">

                                <input required class="input" type="text" value="" name="capital" id="capital">
                                <label class="input-label" for="capital">Capital disponible
                                </label>
                            </div>
                        </div>

                        <div class="btn-añadir mod">
                            <input type="submit" value="Guardar" name="registro_clienteJ">
                        </div>
                    </fieldset>
                </form>

                <form method="post">
                    <fieldset id="datos-pcn" class="orden-inputs">
                        <legend id="pn">Persona de Contacto</legend>
                        <div class="grid-2">

                            <div class="input-group">

                                <input required class="input" type="text" value="" name="nombre-pc" id="nombre-pc">
                                <label class="input-label" for="nombre-pc">Nombre
                                </label>
                            </div>

                            <div class="input-group">

                                <input required class="input" type="text" value="" name="apellido-pc" id="apellido-pc">
                                <label class="input-label" for="apellido-pc">Apellido</label>
                            </div>

                            <div class="input-group">

                                <input required class="input" type="text" value="" name="ci3" id="ci3">
                                <label class="input-label" for="ci3">Cedula
                                </label>
                            </div>

                            <div class="input-group">

                                <input required class="input" type="text" value="" name="rif-pc" id="rif-pc">
                                <label class="input-label" for="rif-pc">RIF</label>
                            </div>

                            <div class="input-group">

                                <input required class="input" type="text" value="" name="tele-pc" id="tele-pc">
                                <label class="input-label" for="tele-pc">Telefono
                                </label>
                            </div>

                            <div class="input-group">

                                <input required class="input" type="text" value="" name="direc-pc" id="direc-pc">
                                <label class="input-label" for="direc-pc">Dirección</label>
                            </div>

                            <div class="input-group">

                                <input required class="input" type="email" value="" name="email2" id="email2">
                                <label class="input-label" for="email2">Direccion de correo electronico
                                </label>
                            </div>
                        </div>

                        <?php
            
            $registro = FormularioControlador::ctrRegistro();

            if ($registro == 'ok') {
                echo '<script>
                if(window.history.replaceState){
                    window.history.replaceState(null,null,window.location.href);
                }
                </script>';
                echo '<h4>Registro exitoso</h4>';
            }

            ?>

                        <div class="btn-añadir mod">
                            <input type="submit" value="Guardar" name="registro_clienteN">
                        </div>

                    </fieldset>
                </form>

            </form>
            

            <div id="dbtn2" class="btn-añadir mod">
                <button type="submit" id="modificar-datos">Modificar</button>
            </div>

        </section>

        <section>
            <h2>Metodos de Pago</h2>
            <ul id="mostrar-mp">
                <li>Sweet Points: <span>2</span></li>
                <li>Zinli</li>
                <li>Zelle</li>
                <li>Paypal</li>
            </ul>

            <form id="act-MD" action="Actualizar.php" method="POST">

                <fieldset id="metodos-pago">
                    <legend>Metodos de Pago</legend>
                    <div class="grid3">
                        <div class="metodos-pago">
                            <input type="checkbox" name="zinli" id="zinli" value="zinli">
                            <label for="zinli">Zinli</label>
                        </div>
                        <div class="metodos-pago">
                            <input type="checkbox" name="paypal" id="paypal">
                            <label for="paypal">Paypal</label>
                        </div>
                        <div class="metodos-pago">
                            <input type="checkbox" name="debito" id="debito">
                            <label for="debito">Debito</label>
                        </div>
                        <div class="metodos-pago">
                            <input type="checkbox" name="credito" id="credito">
                            <label for="credito">Credito</label>
                        </div>
                        <div class="metodos-pago">
                            <input type="checkbox" name="pago-movil" id="pago-movil">
                            <label for="pago-movil">Pago Movil</label>
                        </div>
                        <div class="metodos-pago">
                            <input type="checkbox" name="zelle" id="zelle">
                            <label for="zelle">Zelle</label>
                        </div>
                        <div class="metodos-pago">
                            <input type="checkbox" name="efectivo" id="efectivo">
                            <label for="efectivo">Efectivo</label>
                        </div>
                        <div class="metodos-pago">
                            <input type="checkbox" name="cheque" id="cheque">
                            <label for="cheque">Cheque</label>
                        </div>
                    </div>
                </fieldset>
                <div class="btn-añadir mod">
                    <input type="submit" value="Guardar" name="actualizar_pagos">
                </div>

            </form>

            <div class="btn-añadir mod">
                <button id="modificar-MP">Modificar</button>
            </div>
        </section>

    </div>

</main>
<?php
echo "<script>
    let datosMostrados = document.getElementById('datos-mostrados');
    let btnModDatos = document.getElementById('modificar-datos');
    let formDatos = document.getElementById('act-datos-contac');
    let dbtn = document.getElementById('dbtn2');
    let df = document.getElementById('df');

    let valorPJ = document.getElementById('persona-j')
    let valorPN = document.getElementById('persona-n')
    let datosPJ = document.getElementById('datos-pj');
    let datosPN = document.getElementById('datos-pcn');
    let legendPN = document.getElementById('pn');

    formDatos.style.display = 'none';

    btnModDatos.addEventListener('click', function() {
        if (datosMostrados.style.display !== 'none') {
            datosMostrados.style.display = 'none';
            formDatos.style.display = 'block';
            dbtn.style.display = 'none';
        }
    });

    if(!valorPJ.checked && !valorPN.checked){
        datosPJ.style.display = 'none';
        datosPN.style.display = 'none';
    }

    valorPJ.addEventListener('click', function() {
        if (valorPN.checked) {

            valorPN.checked = false;

            datosPJ.style.display = 'grid';
            datosPN.style.display = 'grid';
        } else {
            datosPJ.style.display = 'grid';
            datosPN.style.display = 'grid';
        }

        legendPN.innerText = 'Persona de Contacto';

    });

    valorPN.addEventListener('click', function() {
        if (valorPJ.checked) {

            valorPJ.checked = false;

            datosPJ.style.display = 'none';
            datosPN.style.display = 'grid';
        } else {
            datosPJ.style.display = 'none';
            datosPN.style.display = 'grid';
        }

    });

    let btnModMP = document.getElementById('modificar-MP');
    let formMD = document.getElementById('act-MD');
    let mostrarMP = document.getElementById('mostrar-mp');

    formMD.style.display = 'none';

    btnModMP.addEventListener('click', function() {

        if (mostrarMP.style.display !== 'none') {
            formMD.style.display = 'block';
            mostrarMP.style.display = 'none';
            btnModMP.innerText = 'Guardar';
        }
    });
</script>"

?>