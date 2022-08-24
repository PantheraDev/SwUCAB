<?php

require_once 'conexion.php';

class ModeloFormulario
{

    //Registro

    static public function mdlFormulario($tabla, $datos)
    {

        $sql = "INSERT INTO $tabla (USUA_USERNAME,USUA_PASSWORD,USUA_CORREO) VALUES('$datos[usua_username]', '$datos[usua_password]', '$datos[usua_correo]');";

        $con = new Conex();

        $status = $con->ejecutar($sql);

        if ($status) {
            return 'ok';
        } else if ($status === false) {
            print_r("ta fea la situcaion");
        }
    }

    //SELECCIONAR REGISTRO

    static public function mdlSeleccionarRegistros($tabla, $item, $value){
        
        if($item == null && $value == null){

            $sql = "SELECT * FROM $tabla";
            $conex = new Conex();
            $status = $conex->consultar($sql);
            return $status;

        }
        else{
            $sql = "SELECT * FROM $tabla WHERE $item = '$value';";
            $conex = new Conex();
            $status = $conex->consultar($sql);
            return $status->fetch();
        }

        
 

    }
}
