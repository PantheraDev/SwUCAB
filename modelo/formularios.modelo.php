<?php

require_once 'conexion.php';

class ModeloFormulario
{

    //Registro

    static public function mdlFormulario($tabla, $datos)
    {

        $con = new Conex();

        if ($tabla == 'USUARIO') {

            $sql = "INSERT INTO $tabla (USUA_USERNAME,USUA_PASSWORD,USUA_CORREO) VALUES('$datos[usua_username]', '$datos[usua_password]', '$datos[usua_correo]');";

            $status = $con->ejecutar($sql);

            if ($status) {
                return 'ok';
            } else if ($status === false) {
                return 'error';
            }

        } else {

            $sql = array("INSERT INTO $tabla (fk_cliente_rif, clie_n_cedula, clie_n_primer_nombre, clie_n_segundo_nombre, clie_n_primer_apellido, clie_n_segundo_apellido, clie_n_direccion) VALUES($datos[rif], $datos[cedula], '$datos[nombre]','Manolo','$datos[apellido]', 'Lara','$datos[direc]');","INSERT INTO cliente (clie_rif, clie_correo, fk_lugar) VALUES($datos[rif], '$datos[correo]',1);");

            $status = $con->ejecutar($sql[1]);

            if ($status) {
                
                $status = $con->ejecutar($sql[0]);

                if ($status) {
                    return 'ok';
                } else if ($status === false) {
                    return 'error';
                }
                
            } else if ($status === false) {

                return 'error';

            }
        }

    }

    //SELECCIONAR REGISTRO

    static public function mdlSeleccionarRegistros($tabla, $item, $value)
    {

        //item: Nombre del atributo
        //value: valor del atributo

        if ($item == null && $value == null) {

            $sql = "SELECT * FROM $tabla";
            $conex = new Conex();
            $status = $conex->consultar($sql);
            return $status;
        } else {

            $sql = "SELECT * FROM $tabla WHERE $item = '$value';";
            $conex = new Conex();
            $status = $conex->consultar($sql);
            return $status->fetch();
        }
    }

    //actualizar registro

    static public function mdlActualizarRegistro($tabla, $datos)
    {

        $sql = "UPDATE $tabla SET USUA_USERNAME = '$datos[usua_username]',USUA_PASSWORD = '$datos[usua_password]',USUA_CORREO = '$datos[usua_correo]' WHERE id_usuario = '$datos[id_usuario]';";

        $con = new Conex();

        $status = $con->ejecutar($sql);

        if ($status) {
            return 'ok';
        } else if ($status === false) {
            print_r("ta fea la situcaion");
        }
    }

    //Eliminar Registros

    static public function mdlEliminarRegistros($tabla, $valor)
    {

        $sql = "DELETE FROM $tabla WHERE id_usuario = '$valor';";

        $con = new Conex();

        $status = $con->ejecutar($sql);

        if ($status) {
            return 'ok';
        } else if ($status === false) {
            print_r("ta fea la situcaion");
        }
    }
}
