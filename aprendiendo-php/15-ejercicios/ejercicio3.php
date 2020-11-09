<?php

/* 
 Progrma que compruebe si una variable esta vacia y si esta vacia rellenarla con texto en minusculos y mostralo en mayuscular y negrita
  
 */

$texto = "";
$frase = "La vida es bella";

if(empty($texto)){
    $texto = strtoupper($frase);
    echo "<strong>$texto<strong>";
}else{
    echo "<h3>La variable tiene contenido</h3>";
}
