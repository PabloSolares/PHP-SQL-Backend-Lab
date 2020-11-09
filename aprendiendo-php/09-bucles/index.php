<?php

/*
  while (condicion){
  bloque de instrucciones
 * }
 */
$numero = 0;
while ($numero <= 100) {
    echo $numero;

    if ($numero != 100) {
        echo ",";
    }
    $numero++;
}
echo "<hr>";
//EJEMPLO 

if (isset($_GET['numero'])) {
    //CAMBIAR TIPO DE DATOS
    $numero =(int) $_GET['numero'];
} else {
    $numero = 2;
}

echo "<h1>Tabla de multiplicar del numero $numero </h1>";

$contador = 0;
while ($contador <= 10){
    echo "$numero x $contador = ".($numero*$contador)."<br>";
    $contador++;
}

/*
do{
    //Bloque de instrucciones
}while (condicion)
 
 */
echo "<hr>";

$contador = 1;
$edad = 18;
do{
    echo"Tienes acceso al local privado $contador <br>";
    $contador++;
}while ($edad >= 18 && $contador <= 10);