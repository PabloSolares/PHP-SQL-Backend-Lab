<?php

$cantantes = ['Ozuna', '2pac', 'Drake' , 'Alfredo'];
$numeros = [1,4,3,2,1,6];

//Ordenar
sort($numeros);
var_dump($numeros);


//Añadir elementos array

$cantantes[] = "Natos";
array_push( $cantantes, "Waor");
//Eliminar elementos array
array_pop($cantantes);
unset($cantantes[2]);

//Aleatorio
$indice = array_rand($cantantes);
echo $cantantes[$indice];

//Dar la vuelta a un array

var_dump(array_reverse($numeros));

//Buscar dentro de un array

$resultado = array_search('Drake', $cantantes);
var_dump($resultado);

//Contar

echo sizeof($cantantes);