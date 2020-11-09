<?php

/* 
Escribir un programa en php que añada valores a un array mistras su longitud 
sea menor a 120 y luego mostralo por pantalla
 */

$collecion = [];

for($i = 0; $i < 120; $i++ ){
    array_push($collecion,"El elemento agregado es: ".$i);
}

echo $collecion[45];

