<?php

/*
  Para mostar le valor  de las cookies, tengo que usar $_COOKIE una variable supergloabal
  es un array asociativo
 *  */

if (isset($_COOKIE['micookie'])) {
    echo "<h1>" . $_COOKIE['micookie'] . "</h1>";
} else {
    echo "<h1>La cookie no existe</h1>";
}

if (isset($_COOKIE['oneyear'])) {
    echo "<h1>" . $_COOKIE['oneyear'] . "</h1>";
} else {
    echo "<h1>La cookie no existe</h1>";
}

?>
<a href="crearcookies.php">Create Cookies</a>
<a href="deletecookies.php">Delete Cookies</a>
