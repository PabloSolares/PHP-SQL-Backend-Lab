<?php

//Operadores aritmeticos

$numero1 = 55;
$numero2 = 33;

echo 'Suma: '. ($numero1+$numero2). '<br/>';
echo 'Resta: '. ($numero1-$numero2). '<br/>';
echo 'Division: '. ($numero1/$numero2). '<br/>';
echo 'Multiplicacion: '. ($numero1*$numero2). '<br/>';
echo 'Resto: '. ($numero1%$numero2). '<br/>';

// Operadores decremento e incremento
$year = 2019;
//Incremento 
$year++;

//Decremento
$year--;

//Preincremento
++$year;

//PreDecremento
--$year;



echo "<h1>$year<h1>";

//Operadore de asignacion

$edad = 55;

echo $edad . '<br/>';
//$edad = $edad + 5;
echo ($edad+=5);
