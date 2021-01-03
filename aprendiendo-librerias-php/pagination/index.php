<?php 
require_once '../vendor/autoload.php';


// CONEXION DB
$conexion = new mysqli("localhost", "root", "", "notas_master");
$conexion->query("SET NAMES 'utf8'");

// CONSULTA PARA CONTAR ELEMENTOS TOTALES
$consulta = $conexion->query("SELECT COUNT(id) as 'total' FROM notas");
$numero_elementos = $consulta->fetch_object()->total;
$numero_elementos_pagina = 1; 

// PAGINACION


$pagination = new Zebra_Pagination();

// NUMERO TOTAL DE ELEMENTOS
$pagination->records($numero_elementos);

// NUMERO DE ELEMENTOS POR PAGINA
$pagination->records_per_page($numero_elementos_pagina);
$page = $pagination->get_page();

$empieza_aqui = (($page - 1)* $numero_elementos_pagina); 
$notas = $conexion->query("SELECT * FROM notas LIMIT $empieza_aqui, $numero_elementos_pagina");
echo '<link rel="stylesheet" href="../vendor/stefangabos/zebra_pagination/public/css/zebra_pagination.css" type="text/css">';
while($nota = $notas->fetch_object()){
    echo "<h1>{$nota->titulo}</h1>";
    echo "<h1>{$nota->descripcion}</h1> </hr>";
}

$pagination->render();