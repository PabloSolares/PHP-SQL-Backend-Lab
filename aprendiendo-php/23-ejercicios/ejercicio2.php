<?php

/*
  ejercicio2:
  .Una funcion
 * Validar un email con filter_var
 * Recoger varaiable por get y validarla 
 * Mostrar los resultados
 */
 $email = "";
function validarCorreo($email) {
    if (is_string($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    }
}

if (!empty($_GET['correo'])) {
      $email = $_GET['correo'];
}

if (validarCorreo($email)) {
    echo "<h1>Correo Correcto</h1>";
    echo "<h1>El correo es: $email</h1>";
} else {
    echo "<h1>El Correo: $email es Incorrecto</h1>";
}

validarCorreo($email);
