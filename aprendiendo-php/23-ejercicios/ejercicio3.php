

<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Calculadora en PHP</title>
    </head>
    <body>
        <h1>Calculadora php</h1>
    </body>
    <form action="" method="POST">
        <label for="n1">Numero 1</label>
        <input type="number" name="n1" />

        <label for="n2">Numero 2</label>
        <input type="number" name="n2" />

        <input type="submit" value="Sumar" name="sumar" />
        <input type="submit" value="Restar" name="restar" />
        <input type="submit" value="Multiplicar" name="multiplicar" />
        <input type="submit" value="Dividir" name="dividir" />

    </form>

</html>

<?php
/*
  ejercicio 3: hacer una interfaz de usuario con 2 inputs y botones
 * uno para sumar, restar, dividir y multiplicar
 */
if (isset($_POST['n1']) && isset($_POST['n2'])) {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
}

if (isset($_POST['sumar'])) {
    $suma = $_POST['sumar'];
    $suma = $n1 + $n2;
    echo "<h2>Resultado de la suma: $suma</h2>";
}

if (!empty($_POST['restar'])) {
    $resta = $_POST['restar'];
    $resta = $n1 - $n2;
    echo "<h2>Resultado de la resta: $resta</h2>";
}

if (!empty($_POST['multiplicar'])) {
    $multiplica = $_POST['multiplicar'];
    $multiplica = $n1 * $n2;
    echo "<h2>Resultado de la multiplicacion: $multiplica</h2>";
}
if (!empty($_POST['dividir'])) {
    $dividi = $_POST['dividir'];
    $dividi = $n1 / $n2;
    echo "<h2>Resultado de la division: $dividi</h2>";
}

?>