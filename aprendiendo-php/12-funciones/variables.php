<?php

/*
Variables locales:Son las que se definen dentro de una funcion y no pueden ser usadas
 * fuera de la funcion, solo estan disponibles dentro. A no ser que hagamos
 * un return
Variables globales: son las que se declaran fuera de una funcion y estan disponibles dentro
 * y fuera de las funciones
  */

$frase = "Ni los genios son tan geniosm ni los mediocres tan mediocres";

//echo $frase;

function holaMundo(){
    global $frase;
    echo "<h1>$frase</h1>";
    
    $year = 2020;
    echo "<h1>$year</h1>";
    
    
    return $year;
}


//holaMundo();


//Funciones Variables

function buenasDias(){
   return  "Hola! Buenos dias";
}

function buenasTardes(){
   return  "Hey! Que tal la comida??";
}

function buenasNoches(){
   return  "¿Te vas a dormir ya? Buenas Noches!!";
}

$horario = "Noches";
$miFuncion = "buenas".$horario;
echo $miFuncion();