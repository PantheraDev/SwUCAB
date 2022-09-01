<form action="" method="post">
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