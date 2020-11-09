<?php

if (isset($_GET['numero1']) && isset($_GET['numero2'])) {

    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    if ($numero1 < $numero2) {
        for ($i = $numero1 + 1; $i <= $numero2; $i++) {
        
            if($i % 2 != 0){
                echo "$i Es impar<br>";
            }else{
                echo "$i  Es par<br>";
            }
        }
        
        
    } else {
        for ($i = $numero2; $i <= $numero1; $i++) {
            echo "$i<br>";
        }
    }
} else {
    echo "<h1>Introduce correctamente los datos</h1>";
}

