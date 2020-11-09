<?php

/* 
 Sesion: Almacenar y persistir datos del usuario que navega en un sitio web
 hasta que cierra sesion el navegador
 */


//Iniciar la sesion

session_start();
//VARIABLE NORMAL
$variable_normal = "Soy una cadena de texto";

//VARIABLE DE SESION
$_SESSION['variable_persistente'] = "HOLA SOY UNA SESION ACTIVA";

echo $variable_normal. "<br>";

echo $_SESSION['variable_persistente'];