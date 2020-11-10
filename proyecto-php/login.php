<?php 
//INICIAR LA SESION Y LA CONEXION A BD
require_once 'includes/conexion.php';
//REGOGER DATOS DEL FORMULARIO
if(isset($_POST)){
    //Borrar sesion antiguo
    if(isset($_SESSION['error_login'] )){
        session_unset($_SESSION['error_login']);
    }
    $email = trim($_POST['email']);
    $password = $_POST['password'];


    //CREDENCIALES DEL USUARIO

    $sql= "SELECT * FROM usuarios WHERE email = '$email' LIMIT 1";
    $login = mysqli_query($db, $sql);

    if($login && mysqli_num_rows($login) == 1){
        $usuario = mysqli_fetch_assoc($login);
        
        //CONSULTA PARA COMPROBAR LAS CREDENCIALES DEL USUARIO
        $verify = password_verify($password, $usuario['password']);
        
        if($verify){
            //UTILIZAR UNA SESION PARA GUARDAR LOS DATOS DEL USUARIO LOGUIDAO
            $_SESSION['usuario'] = $usuario;

        }else{
            //SI ALGO FALLA ENVIAR UNA SESION CON EL FALLO
            $_SESSION['error_login'] = "Login Incorrecto!!";
        }
    }else{
        //mensaje de error
        $_SESSION['error_login'] = "Login Incorrecto!!";

    }

    
}

//REDIRIGIR AL INDEX

header('Location: index.php');