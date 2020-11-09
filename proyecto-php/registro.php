<?php 
if (isset($_POST)) {

    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
    $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $password = isset($_POST['password']) ? $_POST['password'] : false ;
    

    //Array errores
    $errores = array();
    //Validar datos
    //VALIDAR NOMBRE
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
        $nombre_validado = true;
    }else{
        $errores['nombre'] = "El nombre no es valido";
    }

    //VALIDAR APELLIDOS
    if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/",$apellidos)){
        $apellidos_validado = true;
    }else{
        $errores['apellidos'] = "El apellido no es valido";
    }


    //VALIDAR EMAIL
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_validado = true;
    }else{
        $errores['email'] = "El email no es valido";
    }

    //VALIDAR
    if(!empty($password)){
        $password_validado = true;
    }else{
        $password_validado = false;
        $errores['password'] = "La contraseña esta vacia";
    }

    
    $guardar_usuario = false;
    if(count($errores) == 0){
        $guardar_usuario = true;
        //Insert usuarios en la base de datos
    
    }else{

    }



}




?>