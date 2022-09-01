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
    </fieldset>

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
    </fieldset>

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

    <div class="centrar-btn">
        <input type="submit" value="Guardar" id="btn-cli" class="btn" name="guardar">
    </div>

</form>