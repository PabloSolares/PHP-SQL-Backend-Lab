<?php

/*
  crear un array con el contenido de la siguente tabla:
  Accion    Aventura  Deportes
  GTA       Assasins  Fifa 21
  COD       Crash     Pes 21
  PUG       Princeof  Moto Gp

  cada columna debe ir en un fichero separado (includes)
 */

include 'includes/accion.php';
include 'includes/aventura.php';
include 'includes/deportes.php';


$juegos = [
    $accion,
    $aventura,
    $deportes
];

echo "<table border >";
echo "<tr>";
    echo "<th width = '200' >ACCION</th>";
    echo "<th width = '200' >AVENTURA</th>";
    echo "<th width = '200' >DEPORTES</th>";
echo "</tr>";

echo "<tr>";
    echo "<td>$accion[0]</td>";
    echo "<td>$aventura[0]</td>";
    echo "<td>$deportes[0]</td>";
echo "</tr>";
echo "<tr>";
    echo "<td>$accion[1]</td>";
    echo "<td>$aventura[1]</td>";
    echo "<td>$deportes[1]</td>";
echo "</tr>";
echo "<tr>";
    echo "<td>$accion[2]</td>";
    echo "<td>$aventura[2]</td>";
    echo "<td>$deportes[2]</td>";
echo "</tr>";


echo "</table>";




var_dump($juegos);


