<?php

/* 
 Crear una sesion que aunemte su valor en uno disminuya en uno 
 en funcion de si el parametro get counter esta a uno o a cero
 */

session_start();

if(!isset($_SESSION['numero'])){
    $_SESSION["numero"] = 0;
}

if(isset($_POST['aumentar']) && $_POST['aumentar']==1){
    $_SESSION["numero"]++;
}

if(isset($_POST['disminuir']) && $_POST['disminuir']==-1){
    $_SESSION["numero"]--;
}



?>

<h1>El valor de la sesion es: <?= $_SESSION['numero']?></h1>
<form action="" method="POST">
    <input type="submit" name="aumentar" value="1" />
</form>
<form action="" method="POST">
    <input type="submit" name="disminuir" value="-1" />
</form>



