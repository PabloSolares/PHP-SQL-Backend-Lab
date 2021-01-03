<?php 

require_once '../vendor/autoload.php';
$frutas = [
    "Manzanas",
    "Naranjas",
    "Sandias"
];

\FB::log($frutas);

$nombres = array("ejecutivo" => "Antonio", "empresario", "Solares");
\FB::log($nombres);


echo "Hola Mundo1 !!". $nombres['ejecutivo'];

\FB::log("Muestame esto en consola");