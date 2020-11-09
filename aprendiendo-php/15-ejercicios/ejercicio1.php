<?php

/*
  Hacer un programa en PHP que tenfaun array con 8 nunmeros enteros y que haga los siguente:
  -Recorer y mostrarlo
  -Ordenarlo y mostralos
  - MOstrar su longitud
  - Buscar algun elemento
 */


$numeros = [33, 44, 52, 1, 22, 81, 76, 16];

// -Recorer y mostrarlo

echo "<h1>Recorrer y mostrarlo</h1>";

echo "<ul>";

foreach ($numeros as $numero) {
    echo "<li>" . $numero . "</li>";
}
// -Ordenarlo y mostralos 
echo "</ul>";
echo "<h1>Ordenarlo y mostrarlo</h1>";
sort($numeros);

echo "<ul>";

foreach ($numeros as $numero) {
    echo "<li>" . $numero . "</li>";
}


echo "</ul>";
// - MOstrar su longitud

echo "<h1>Lonngitud</h1>";

$contar = sizeof($numeros);

echo "<h3>La longitud es: $contar</h3>";

// - Buscar algun elemento
echo "<h1>Buscar un elemento</h1>";
if (isset($_GET['numero'])) {
    $buscar = $_GET['numero'];



    var_dump($buscar);
    echo "<h3>Busacar en el array el numero: $buscar</h3>";

    $search = array_search($buscar, $numeros);

    if (!empty($search)) {
        echo "<h3>El numero buscado existe en el array, en el indice: $search<h3>";
    } else {
        echo "<h3>El numero buscado no existe en el array<h3>";
    }
}
