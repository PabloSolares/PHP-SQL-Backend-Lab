<?php
/*
//Abrir archivo 
$archivo = fopen("fichero_texto.txt", "a+");

//leer archivo 
while (!feof($archivo)) {
    $contenido = fgets($archivo);
    echo $contenido. "<br>";
}

//Escribir 
fwrite($archivo, "Soy un texto metido en php");
//cerrar archivo 

fclose($archivo);
*/

//copy('fichero_texto.txt', 'fichero_copiado.txt') or die("Error al copiar");

//Renombrar
//rename('fichero_copiado.txt', 'archivito_recopiadito.txt');

//Eliminar

//unlink('archivito_recopiadito.txt') or die('Error al borrar');


if(file_exists('fichero_texto.txt')){
    echo "El archivo existe";
} else {
    echo "No existe";
}









