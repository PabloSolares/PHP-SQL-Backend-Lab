<?php

/* 
 COOkie: es unn fichero que se almacena en el ordenador del usuario que visita
 la web, con el fin de recordar datos o ratrear el comportamiento del mismo
 en la web.
 */

//Crear cookie

//setcookie("nombre", "valor que solo puede ser tezto", caducidad, ruta, dominio);

//COOKIE BASICA
setcookie("micookie", "valor de mi galleta");

//COOKIE CON EXPIRACION
setcookie("oneyear", "valor de mi coookie de 365 days", time()+(60*60*24*365));
header('Location:ver_cookies.php');
?>
