<h1>Bienvenido a mi web Con MVC</h1>
<?php

require_once '../autoload.php';

if(isset($_GET['controller'])){
    $nombre_controlador = $_GET['controller'].'Controller';
}else{
    echo "Esa accion no existe";
    exit();
}

if (class_exists($nombre_controlador)) {

    $controlador = new $nombre_controlador();

    if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
        $action = $_GET['action'];
        $controlador->$action();

    } else {
        var_dump($_GET['action']);
        
        echo "Esa accion no existe";
    }

} else {
    echo "Esa accion no existe1";
}
