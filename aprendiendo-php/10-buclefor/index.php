<?php

/*
for(expresion inicial, condicion, incrementa){
    instrucciones
 * } */

$resultado = 0;

/*
for($i = 0; $i <= 100; $i++){
    $resultado = $resultado+ $i;
    echo "<p>$resultado</p>";
   
}

echo "<h1>El resutlado es: $resultado</h1>";
*/

if (isset($_GET['numero'])) {
    //CAMBIAR TIPO DE DATOS
    $numero =(int) $_GET['numero'];
} else {
    $numero = 1;
}

echo "<h1>Tabla de multiplicar del numero $numero </h1>";


for($i = 1; $i <= 10; $i++){
    if($numero == 45){
        echo "No se pueden mostrar estas operaciones";
        break;
    }
    echo "$numero x $i = ".($numero*$i)."<br>";
   
}