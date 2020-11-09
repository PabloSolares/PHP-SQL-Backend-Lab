<?php

//CONECTAR A LA BASE DE DATOS
$conexion = mysqli_connect("localhost", "root", "", "phpmysql");


//Comprobar si la conexion es correcta
if (mysqli_connect_error()) {
    echo("La conexion a la base de datos MYSQL, ha fallado: " . mysqli_connect_error());
} else {
     echo"Conexion realizada correctamente";
}

//Consulta para configurar la codificaion de caracteres

mysqli_query($conexion, "SET NAMES 'utf8'");

//Consulta select desde php

$query = mysqli_query($conexion, "SELECT * FROM notas");


while ($nota = mysqli_fetch_assoc($query)) {
    //var_dump($nota);
    
    echo "<h2>".$nota['titulo'] . "</h2>";
    echo $nota['descripcion'] . "<br/>";
}




//INsetar en la base de datos

$sql = "INSERT INTO notas VALUES(NULL, 'Nota desde PHP', 'Esto es una nota de php', 'Green')";
$insert = mysqli_query($conexion, $sql);
echo "<hr>";
if($insert){
    echo "DATOS INSERTADOS CORRECTAMENTE";
} else {
    echo "ERROR: ". mysqli_error($conexion);
}


