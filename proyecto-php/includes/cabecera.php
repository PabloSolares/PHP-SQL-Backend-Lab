<?php require_once 'includes/conexion.php'?>
<?php require_once 'includes/helpers.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog de videojuegos</title>
    <link rel="shortcut icon" href="Assets/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="Assets/style.css">
</head>

<body>
    <!--Header-->
    <header id="header">
        <!--logotipo-->
        <div id="logo">
            <a href="index.php">Blog de Videojuegos</a>
        </div>
        <div class="clearfix"></div>
        <!--Menu-->
        
        <nav id="nav">
            <ul>
                <li>
                    <a href="index.php">Inicio</a>
                </li>
                <?php $categorias = conseguirCategorias($db);
                if(!empty($categorias)):
                while($categoria = mysqli_fetch_assoc($categorias)) : 
                ?>
                    <li>
                        <a href="categoria.php?id=<?= $categoria['id'] ?>"><?= $categoria['nombre'] ?></a>
                    </li>
                <?php 
                
                endwhile; 
                endif;
                ?>
                <li>
                    <a href="index.php">Sobre mi</a>
                </li>
                <li>
                    <a href="index.php">Contacto</a>
                </li>
            </ul>
        </nav>
    </header>
    <div id="contenedor">