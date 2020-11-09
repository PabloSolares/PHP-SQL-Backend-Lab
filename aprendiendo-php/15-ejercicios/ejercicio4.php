<?php

/* 
 crear un script en php que tenga cuatro variables, una de tipo array, otra
 de tipo string, otra int y otra  booleana y que imprimas un mensaje segun el tipo de variable

 */

$array = ["hola munndo", 88];
$titulo = "Este es el master en php";
$numero = 22;
$false = false;

if(is_array($array)){
    echo "<h1>El arreglo es un array</h1>";
}

if(is_string($titulo)){
    echo "<h1>El titulo es un string</h1>";
}

if(is_int($numero)){
    echo "<h1>El numero es un numero</h1>";
}

if(is_bool($false)){
    echo "<h1>El parametro es un booleano</h1>";
}




