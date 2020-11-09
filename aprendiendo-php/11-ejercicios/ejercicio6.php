<?php

echo "<table border='1'> <tr>";

echo "<tr>";//Inicio fila 1 
    for($cabecera = 1; $cabecera <= 10;$cabecera++){
        echo "<td>Tabla del $cabecera</td>";
    }  
echo "</tr>";//final fila 1

echo "<tr>";//Inicio fila 2 
    for($i = 1; $i <= 10; $i++ ){
        echo "<td>";
        for($x = 1; $x<=10; $x++){
            echo "$i x $x = ".($i*$x). "<br>";
        }
        echo "</td>"; 
      
        }
     
echo "</tr>";//final fila 2


echo "</table>";//Fin de la tabla

