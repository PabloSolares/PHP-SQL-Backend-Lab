<?php

/*
  Funciones:  ion es un conjunto de instrucciones agrupados bajo un npmbre concreto y que pueden reutilizarse solamente innvocando a la funcion tantas veces como queramos
  function nombredeFuncion($parametro){
  //bloque / conjunto de instrucciones
 *  }
  nombreFuncion($parametro);
  nombreFuncion($parametro);

 *   */

//Ejemplo
$nombre = "Pablo Daniel Solares";

function mustraNombres($nombre) {
    for ($i = 1; $i <= 4; $i++) {
        echo "$nombre<br>";
    }
}

//Imvocar
//mustraNombres($nombre);


function tabla($numero) {
    echo "<h3>Tabla de multiplicar del numero: $numero</h3>";
    for ($i = 1; $i <= 10; $i++) {
        echo "$numero x $i = " . ($numero * $i) . "<br>";
    }
}

/*
  if(isset($_GET['numero'])){
  tabla($_GET['numero']);
  } else {
  echo 'NO hay numero que sacar';
  }
 */


for ($i = 0; $i <= 10; $i++) {
    //tabla($i);
}

//Ejemplo 3

function calculadora($numero1, $numero2, $negrita = false) {
    //Conujunto de instrucciones a ejecutar 
    $suma = $numero1 + $numero2;
    $Resta = $numero1 - $numero2;
    $division = $numero1 / $numero2;
    $multiplicacion = $numero1 * $numero2;
    
    $cadena_texto = "";
    
    if ($negrita) {
        echo "<h1>";
    }

    $cadena_texto .="Suma: $suma<br>";
    $cadena_texto .="Resta: $Resta<br>";
    $cadena_texto .= "Multiplicacion: $multiplicacion<br>";
    $cadena_texto .="Divison: $division<br>";


    if ($negrita) {
        $cadena_texto .="</h1>";
    }
    $cadena_texto .= "<hr>";
    
    return $cadena_texto;
}

echo calculadora(10, 5, true);
//Ejemplo 4 

function getNombre($nombre){
   $texto = "El nombre es: $nombre";
   return $texto;
}

function getApellidos($apellidos){
   $texto = "El apellido es: $apellidos";
   return $texto;
}

function devuelveElNombre($nombre, $apellidos){
    $texto = getNombre($nombre)
            ."<br/>".
        $texto = getApellidos($apellidos)
            ."<br/>";
    return $texto;

    
}

echo devuelveElNombre("Pablo Daniel", "Solares");
echo getNombre("Pablo");

