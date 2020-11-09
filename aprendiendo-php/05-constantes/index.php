<?php

//Constantes
//Es un contenedor de informacion que no puede variar 

define('nombre', 'Pablo Solares');
define('web', 'pablosolares.web');

echo '<h1>'. nombre. '</h1>';
echo '<h1>'. web . '</h1>';


//variable
$web = "victorrobles.es";
$web = "PabloSolares.es";
echo '<h1>'. $web . '</h1>';

//Constantes predefinidas 

echo __CLASS__;
