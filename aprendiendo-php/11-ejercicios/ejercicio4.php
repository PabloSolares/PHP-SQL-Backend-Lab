<?php

if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
    
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    
    
} else {
    echo "<h1>Introduce correctamente los datos</h1>";
}


echo "<h1>La Suma, la resta, multiplicacion y division de $numero1 y $numero2 es igual a:</h1>";
echo "Suma: ".($numero1+$numero2)."<br>";
echo "Resta: ".($numero1-$numero2."<br>");
echo "Multiplicacion: ".($numero1*$numero2."<br>");
echo "Division: ".($numero1/$numero2."<br>");
