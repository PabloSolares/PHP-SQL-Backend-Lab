<?php 

require_once '../vendor/autoload.php';

$foto_original = 'mifoto.jpg';
$guardar_en = 'fotomodificada.png';

$thumb = new PHPThumb\GD($foto_original);
//REDIMENDIONAR
$thumb->resize(250,250);

// RECORTAR
$thumb->cropFromCenter(200,100);



$thumb->show();
$thumb->save($guardar_en,'png');