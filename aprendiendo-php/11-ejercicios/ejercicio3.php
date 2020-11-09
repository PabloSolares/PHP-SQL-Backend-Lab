<?php

/*
  Escribir un programa que imprima por pantalla los cuadros de los 40 primeros numeros naturales
 */
$numero = 1;
echo "<h1>Los cuadrados de los numeros naturales son: </h1>";

for ($i = 1; $i <= 40; $i++) {
    echo "$i x $i = " . $i * $i . "<br>";
}

