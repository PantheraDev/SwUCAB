<?php

class FormularioControlador
{
    //REGISTRAR
    static public function ctrRegistro()
    {
        if (isset($_POST['email'])) {
           
            $tabla = 'USUARIO';

            $datos = array('usua_username' => $_POST['user'],'usua_correo' => $_POST['email'], 'usua_password' => $_POST['clave']);
           
            $respuesta = ModeloFormulario::mdlFormulario($tabla,$datos);

            return $respuesta;

        }
    }

    //SELECCIONAR REGISTRO

    static public function ctrSeleccionarRegistros(){

        $tabla = "nombre tabla";

        $respuesta = ModeloFormulario::mdlSeleccionarRegistros($tabla, null, null);

        return $respuesta;
    }

    //Login

    public function ctrIngreso(){

        if (isset($_POST['ingresoEmail'])) {
            
            $tabla = 'USUARIO';
            $item = 'usua_correo';
            $value = $_POST['ingresoEmail'];

            $respuesta = ModeloFormulario::mdlSeleccionarRegistros($tabla, $item, $value);

            if($respuesta["usua_correo"] == $_POST['ingresoEmail'] && $respuesta["usua_password"] == $_POST['ingresoClave']){

                $_SESSION["validarIngreso"] = "ok";
                
                echo '<script>
                if(window.history.replaceState){
                    window.history.replaceState(null,null,window.location.href);
                }
                window.location = "index.php?sw=main";
                </script>';

            }
            else{
                echo '<script>
                if(window.history.replaceState){
                    window.history.replaceState(null,null,window.location.href);
                }
                </script>';
                echo "<h4>Error al ingresar al sistema</h4>";
            }

        }

    }
}
