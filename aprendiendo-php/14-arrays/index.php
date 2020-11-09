<?php

/*
    Arrays 
 Un array es una coleccion o conjunro de datos/valores bajo un unico nombre y para 
 acceder a esos valores podemos usar un indice numero o alfanumerico   
 *  */

$pelicula = "Batman";
$peliculas = array('Batman', 'Spiderman', 'El serñor de los anillos');
$cantantes = ['Ozuna', '2pac', 'Drake'];
$personas= [
    'Nombre' => 'Pablo',
    'Apellidos' => 'Solares',
    'Web' => 'victorroblesweb.es',
];

 var_dump($personas['Apellidos']);
echo $personas['Apellidos'];

 
echo $peliculas[0];
echo "<br>";
echo $cantantes[0];
//for
echo "<h1>Listado de peliculas</h1>";

echo "<ul>";
for($i = 0; $i  < count($peliculas); $i++){
    echo  "<li>" .$peliculas[$i]. "</li>";
}
echo "</ul>";

//for each
echo "<h1>Listado de cantantes</h1>";

echo "<ul>";

foreach ($cantantes as $cantante) {
     echo  "<li>" .$cantante. "</li>";
}
echo "</ul>";


//Arrays multidimendionales

$contactos = [
    [
        'nombre' => 'Daniel',
        'email' => 'hola@gmial.com'
    ],
    
    [
        'nombre' => 'Luis',
        'email' => 'Luis@gmial.com'
    ],
    [
        'nombre' => 'Antonio',
        'email' => 'Antonio@gmial.com'
    ]
];

echo $contactos[2]['email'];


foreach ($contactos as $key => $contacto) {
    var_dump($contacto['nombre']);
}
