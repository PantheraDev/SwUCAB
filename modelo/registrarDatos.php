<?php 
        if (isset($_POST['guardar'])) {
            require_once('conexion.php');

            $email = isset($_POST['email']) ? trim($_POST['email']) : false;
            $user = isset($_POST['user']) ? $_POST['user'] : false;
            $clave = isset($_POST['clave']) ? $_POST['clave'] : false;

            $errores=array();

            if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
                $email_validado = true;
            }else{
                $errores['email'] = 'El email no es válido o esta vació';
                $email_validado = false; 
            }

            if(!empty($user)){
                $user_validado = true;
            }else{
                $errores['user'] = 'Campo usuario vació';
                $user_validado = false;
            }
        
            if(!empty($clave)){
                $clave_validado = true;
            }else{
                $errores['password'] = 'Campo contraseña vació';
                $clave_validado = false;
            }
            
            if(count($errores) === 0){

                $sql = "INSERT INTO USUARIO (USUA_USERNAME,USUA_PASSWORD,USUA_CORREO) VALUES ('$user','$clave','$email');";

                $conexion = new conex();
                $insertar = $conexion->ejecutar($sql);
                
                if($insertar){
                    $_SESSION['completado']='Se ha registrado exitosamente';
                }elseif($insertar === false){
                    $_SESSION['errores']['registro'] = 'Fallo en registrar su usuario, por favor intentelo de nuevo';
                    header('Location:registro.php');
                } 
            }else{
                $_SESSION['errores'] = $errores;
            }
            header('Location: iniciosesion.php');
    }

    if(isset($_POST['guardar_empleado'])){
        require_once('conexion.php');
        $nombre = isset($_POST['nombre4']) ? $_POST['nombre4'] : false;
        $nombreSegundo = isset($_POST['nombre5']) ? $_POST['nombre5'] : false;
        $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : false;
        $apellido2 = isset($_POST['apellido2']) ? $_POST['apellido2'] : false;
        $cedula = isset($_POST['ci4']) ? $_POST['ci4'] : false;
        $experiencia = isset($_POST['experiencia']) ? $_POST['experiencia'] : false;
        $salario = isset($_POST['salario']) ? $_POST['salario'] : false;
        $roles = isset($_POST['roles']) ? $_POST['roles'] : false;
        $email= isset($_POST['email20']) ? $_POST['email20'] : false;
        $clave =isset($_POST['clave20']) ? $_POST['clave20'] : false;

        $conexion = new conex();
        $sql=("INSERT INTO EMPLEADOS VALUES ('$nombre','$nombreSegundo','$apellido','$apellido2',$cedula,'$experiencia',$salario,1,1);");
        $insertar = $conexion->ejecutar($sql);
        $sql2=("SELECT ID_ROL FROM ROL where ROL_NOMBRE = '$roles';");
        $rol = $conexion->consultar($sql2);
        $rol2=$rol->fetch();
        $sql3 = $conexion->ejecutar("INSERT INTO USUARIO (USUA_USERNAME,USUA_PASSWORD,USUA_CORREO) VALUES ('$nombre',$clave,'$email');");
        $insertar = $conexion->ejecutar($sql3);
        $sql4 =("SELECT ID_USUARIO FROM USUARIO WHERE USUA_CORREO='$email';");
        $usua = $conexion->consultar($sql4);
        $idUsuario = $usua->fetch();
        $sql5=("INSERT INTO ROL_USUARIO (FK_ROL,FK_USUARIO) VALUES ($rol2[id_rol],$idUsuario[id_usuario])");
        $insertar = $conexion->ejecutar($sql5);
        $sql6= ("INSERT INTO EMPLEADO_USUARIO (FK_EMPLEADO,FK_USUARIO) VALUES($cedula,$idUsuario[id_usuario]);");
        $insertar = $conexion->ejecutar($sql6);

        if($insertar){
            $_SESSION['completado']='Se ha registrado exitosamente';
        }elseif($insertar === false){
            $_SESSION['errores']['registro'] = 'Fallo en registrar su usuario, por favor intentelo de nuevo';
        } 
        header('Location: god.php');
    }
    


    if (isset($_POST['registro_usuario'])) {
        require_once('conexion.php');

        $email = isset($_POST['email']) ? trim($_POST['email']) : false;
        $user = isset($_POST['user']) ? $_POST['user'] : false;
        $clave = isset($_POST['clave']) ? $_POST['clave'] : false;

        $errores=array();

        if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
            $email_validado = true;
        }else{
            $errores['email'] = 'El email no es válido o esta vació';
            $email_validado = false; 
        }

        if(!empty($user)){
            $user_validado = true;
        }else{
            $errores['user'] = 'Campo usuario vació';
            $user_validado = false;
        }
    
        if(!empty($clave)){
            $clave_validado = true;
        }else{
            $errores['password'] = 'Campo contraseña vació';
            $clave_validado = false;
        }
        
        if(count($errores) === 0){

            $sql = "INSERT INTO USUARIO (USUA_USERNAME,USUA_PASSWORD,USUA_CORREO) VALUES ('$user','$clave','$email');";

            $conexion = new conex();
            $insertar = $conexion->ejecutar($sql);
            
            if($insertar){
                $_SESSION['completado']='Se ha registrado exitosamente';
            }elseif($insertar === false){
                $_SESSION['errores']['registro'] = 'Fallo en registrar su usuario, por favor intentelo de nuevo';
            } 
        }else{
            $_SESSION['errores'] = $errores;
        }
        header('location: god.php');
}

if (isset($_POST['guardar_producto'])) {
    require_once('conexion.php');
    $nombre = $_POST['nombre1'];
    $precio = $_POST['precio'];
    $imagen = $_POST['imagen'];
    $cantidad = $_POST['cantidad'];
    $idProd = $_POST['id20'];
    $descripcion = $_POST['descripcion'];
    $obj = new conex();

    $sql = ("INSERT INTO PRODUCTO VALUES ($idProd,'$nombre',$precio,1)");
    $guardar=$obj->ejecutar($sql);

    $sql2 = ("INSERT INTO IMAGEN (FK_PRODUCTO,IMAG_NOMBRE,IMAG_URL) VALUES ($idProd,'$nombre',$imagen)");
    $guardar=$obj->ejecutar($sql2);

    $sql3 = ("INSERT INTO INVENTARIO (FK_PRODUCTO,FK_TIENDA,FK_ALMACEN) VALUES ($idProd,$cantidad,1,1)");
    $guardar=$obj->ejecutar($sql3);

    header('location:god.php');
}
?>