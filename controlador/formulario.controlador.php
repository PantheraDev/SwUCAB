<?php

class FormularioControlador
{
    //REGISTRAR
    static public function ctrRegistro()
    {
        if (isset($_POST['email'])) {

            $tabla = 'USUARIO';

            $datos = array('usua_username' => $_POST['user'], 'usua_correo' => $_POST['email'], 'usua_password' => $_POST['clave']);

            $respuesta = ModeloFormulario::mdlFormulario($tabla, $datos);

            echo '<script>
                if(window.history.replaceState){
                    window.history.replaceState(null,null,window.location.href);
                }
                </script>';

            return $respuesta;
        }
        elseif(isset($_POST['nombre-pc'])){

            $tabla = 'CLIENTE_NATURAL';

            $datos = array('nombre' => $_POST['nombre-pc'], 'apellido' => $_POST['apellido-pc'], 'cedula' => $_POST['ci3'], 'rif' => $_POST['rif-pc'], 'telefono' => $_POST['tele-pc'], 'direc' => $_POST['direc-pc'], 'correo' => $_POST['email2']);

            $respuesta = ModeloFormulario::mdlFormulario($tabla, $datos);

            echo '<script>
                if(window.history.replaceState){
                    window.history.replaceState(null,null,window.location.href);
                }
                </script>';

            return $respuesta;

        }
        
    }

    //SELECCIONAR REGISTRO

    static public function ctrSeleccionarRegistros($tabla,$item, $value)
    {

        //item: Nombre del atributo
        //value: valor del atributo
        //$tabla = "nombre tabla";

        $respuesta = ModeloFormulario::mdlSeleccionarRegistros($tabla, $item, $value);

        return $respuesta;
    }

    //Login

    public function ctrIngreso()
    {

        if (isset($_POST['ingresoEmail'])) {

            $tabla = 'USUARIO';
            $item = 'usua_correo';
            $value = $_POST['ingresoEmail'];

            $respuesta = ModeloFormulario::mdlSeleccionarRegistros($tabla, $item, $value);

            if ($respuesta["usua_correo"] == $_POST['ingresoEmail'] && $respuesta["usua_password"] == $_POST['ingresoClave']) {

                
                $_SESSION["validarIngreso"] = "ok";
                $_SESSION['usuario'] = $respuesta;
                //print_r(var_dump($respuesta));

                echo '<script>
                if(window.history.replaceState){
                    window.history.replaceState(null,null,window.location.href);
                }
                window.location = "index.php?sw=main";
                </script>';
            } else {
                echo '<script>
                if(window.history.replaceState){
                    window.history.replaceState(null,null,window.location.href);
                }
                </script>';
                echo "<h4>Error al ingresar al sistema</h4>";
            }
        }
    }

    //ACTUALIZAR REGISTROS

    public function ctrActualizarRegistro()
    {

        if (isset($_POST['actualizarNombre'])) {
            if (($_POST['actualizarPassword']) != '') {

                $password = $_POST['actualizarPassword'];
            } else {

                $password = $_POST['actualizarActual'];
            }

            $tabla = 'USUARIO';

            $datos = array(
                'id_usuario' => $_POST['actualizarId'],
                'usua_username' => $_POST['actualizarUser'], 'usua_correo' => $_POST['actualizarEmail'], 'usua_password' => $_POST['actualizarClave']
            );

            $respuesta = ModeloFormulario::mdlActualizarRegistro($tabla, $datos);

            if ($respuesta == 'ok') {

                echo '<script>
                if(window.history.replaceState){
                    window.history.replaceState(null,null,window.location.href);
                }
                </script>';
                echo "<h4>usuario actualizado</h4>";
            }

            return $respuesta;
        }
    }

    //eliminar registros

    public function ctrELiminarRegistros()
    {

        if (isset($_POST['eliminarRegistro'])) {

            $tabla = 'USUARIO';
            $valor = $_POST['eliminarRegistro'];

            $respuesta = ModeloFormulario::mdlEliminarRegistros($tabla, $valor);

            if ($respuesta == 'ok') {

                echo '<script>
                    if(window.history.replaceState){
                        window.history.replaceState(null,null,window.location.href);
                    }
                    </script>';
                echo "<h4>usuario Eliminardo</h4>";
            }

            return $respuesta;
        }
    }
}
