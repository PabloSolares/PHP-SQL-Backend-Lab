<?php 

function autoCargar($nombreClase){
    include "controllers/".$nombreClase.".php";
 
}
 
spl_autoload_register('autoCargar');