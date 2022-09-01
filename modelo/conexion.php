<?php
class Conex
{
    protected $host = 'localhost'; /*ejemplo localhost*/
    protected $user = 'postgres'; /*usuario para ingresar al manejador de bd ejemplo postgres*/
    protected $password = 'Ae164tg-18'; /*la contraseña para ingresar al manejador de bd */
    protected $dbnombre = 'A3'; /*nombre de la base de datos a usar ejemplo sweetucab*/
    protected $conexion; /*este objeto es para simplificar el uso de la clase conex*/

    public function __construct()
    { /*el objeto constructor sera el q se encargue de establecer la conexion en caso de falla envia el error */
        try {
            $this->conexion = new PDO('pgsql:host=' . $this->host . ';dbname=' . $this->dbnombre, $this->user, $this->password);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $error) {
            echo 'Fallo la conexion' . $error->getMessage(); /*Muestra el error o falla de conexion */
        }
    }

    public function ejecutar($sql)
    { /*permite ejecutar secuencias sql excepto select*/

        try {
            return $this->conexion->exec($sql);
        } catch (Exception $e) {
            $e = false;
            return $e;
        }
    }

    public function consultar($sql)
    {
        try {
            return $this->conexion->query($sql);
        } catch (Exception $e) {
            return $e;
        }
    }
}
