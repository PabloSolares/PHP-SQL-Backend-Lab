<?php


//Debuggerar
$nombre= "Pablo";
var_dump($nombre);

//Fechas

echo date('d-m-y');
echo "<br>";
echo time();


//Matematicas
echo "<br>";
echo "Raiz Cuadrada de 10: ". sqrt(10); 
echo "<br>";

echo "Numero Aleatorio entre 10 y 40: ". random_int(10, 40);
echo "<br>";

echo "Numero PI: ". pi();
echo "<br>";

echo "Redonderar: ". round(7.929212, 2);


//Mas funciones generales
echo "<br>";
echo gettype($nombre);
echo "<br>";
//Detectar tipado
if(is_string($nombre)){
    echo "Esa Variable es un string";
}
echo "<br>";

if (is_float($nombre)){
    echo "La variable nombre no es un numero es un numero con decimales";
}

//Comprobar si existe 
echo "<br>";
if (isset($nombre)){
    echo "La variable existe";
} else {
    echo "La variablenp existe";
}

//Limpiar espacios
echo "<br>";
$frase = "      mi contenido       ";

var_dump(trim($frase));


//Eliminar variables / indices 
$year = 2020;
unset($year);

//Combrobar variable vacia

$texto = "adsad";

if(empty($texto)){
    echo "La variable texto esta vacia";
} else {
    echo "La variable tiene contenido";
}

//contar caracteres de un string
$cadena = "12345";
echo "<br>";

echo strlen($cadena);

//Encotrar caracter
echo "<br>";

$frase = "La vida es bella";

echo strpos($frase, "i32432");
echo "<br>";


//Remplazar palabras de un string
$frase = str_replace("vida", "moto", $frase);
echo $frase;
echo "<br>";

//Comvertir a mausculas y minuscula

echo strtolower($frase);
echo "<br>";

echo strtoupper($frase);