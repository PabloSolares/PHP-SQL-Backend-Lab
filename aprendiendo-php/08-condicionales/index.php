<?php

/*
  //Condicionales
  IF:
  if(condicion){
  instruciones
  }else{
  otras instruciones
  }
  //Operadores de comparacion
  == Igual
  === Indentico
  != Diferente
  <>Diferente
  !== No indentico
  < menor que
  > mayor que
  <= menor o igual que
  >= mayor o igual que
 */




$color = "azul";
$year = 2019;
//Ejemplo 1
if ($color == "rojo") {
    echo 'El color  es rojo';
} else {
    echo 'El color no es rojo';
}
//Ejemplo 2
echo '<br>';
if ($year != 2019) {
    echo 'Es un año diferente a  2019';
} else {
    echo ' Estamos en  2019';
}

//Ejemplo 3
$nombre = "David";
$ciudad = "Madrid";
$continente = "America";
$edad = 18;
$mayoriaEdad = 18;

if ($edad >= $mayoriaEdad) {
    echo "<h1>$nombre eres mayor de edad</h1>";
    if ($continente == "Europa") {
        echo "<h2>Y es de $ciudad</h2>";
    } else {
        echo "No es Europeo";
    }
} else {
    echo "<h1>$nombre eres menor de edad</h1>";
}

echo '<br>';
echo '<hr>';


//Ejemplo 4
/*
  if ($dia == 1) {
  echo 'Es lunes';
  } else {
  if ($dia == 2) {
  echo "Es martes";
  } else {
  if ($dia == 3) {
  echo "Es miercoles";
  } else {
  if ($dia == 4) {
  echo "Es Jueves";
  } else {
  if ($dia == 5) {
  echo "Es Viernes";
  } else {
  echo 'Es fin de semana';
  }
  }
  }
  }
  }
 */
$dia = 4;
if ($dia == 1) {
    echo 'Lunes';
} elseif ($dia == 2) {
    echo 'Martes';
} elseif ($dia == 3) {
    echo 'Miercoles';
} elseif ($dia == 4) {
    echo 'Jueves';
} elseif ($dia == 5) {
    echo 'Viernes';
} else {
    echo 'Es fin de semana';
}

echo '<hr/>';

switch ($dia) {
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miercoles";
        break;
    case 4:
        echo "Jueves";
        break;
    case 4:
        echo "Viernes";
        break;
    default :
        echo "Fin de semana";
}


echo '<hr/>';
//Ejemplo

$edad1 = 18;
$edad2 = 64;

$edad_oficial = 17;

if ($edad_oficial >= $edad1 && $edad_oficial <= $edad2) {
    echo "Esta en edad de trabajar";
} else {
    echo 'No puede trabajar';
}
echo '<hr/>';


$pais = "Francia";
if ($pais == "Mexico" || $pais == "España" || $pais == "Colombia") {
    echo 'En este pais se habla español';
} else {
    echo "No se habla español";
}
echo '<hr/>';



goto marca; 
echo "<h3>Instrucciones 1</h3>";
echo "<h3>Instrucciones 2</h3>";
echo "<h3>Instrucciones 3</h3>";
echo "<h3>Instrucciones 4</h3>";

marca:
echo "Me he saltado 4 echos";







