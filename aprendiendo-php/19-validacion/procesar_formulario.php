<?php
$error = 'faltan_valores';
if (!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['edad']) && !empty($_POST['email']) && !empty($_POST['pass'])) {
    $error = 'ok';

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellidos'];
    $edad = (int)$_POST['edad'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
    //Validar el nombre
    
    if(!is_string($nombre) || !preg_match("/[a-z A-Z]+/", $nombre)){
        $error = 'nombre';
    }
    
    if(!is_string($apellido) || preg_match("/[0-9]+/", $apellido)){
        $error = 'apellidos';
    }
    
    if(!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)){
        $error = 'edad';
    }
    
    if(!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = 'email';
    }
    
    if(!is_string($pass) || strlen($pass) < 5){
        $error = 'apellidos';
    }
    /*
    var_dump($_POST);
    var_dump($error);
    die();
    */ 
} else {
    $error = 'faltan_valores';
}

if($error != 'ok'){
    header("Location: index.php?error=$error"); 
}
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Validacion de formularios PHP</title>
    </head>
    <body>
        <?php if ($error == 'ok'): ?>
        <h1>Datos </h1>
            <p><?= $nombre ?></p>
            <p><?= $apellido ?></p>
            <p><?= $edad ?></p>
            <p><?= $email ?></p>
            
            
            
            
        <?php endif; ?>
    </body>
</html>


