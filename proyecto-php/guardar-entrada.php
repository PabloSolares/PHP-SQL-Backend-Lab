<?php 
    if(isset($_POST)){
        require_once 'includes/conexion.php';
        
            $titulo = isset($_POST['titulo']) ? mysqli_real_escape_string($db,$_POST['titulo']) : false;
            $descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($db,$_POST['descripcion']) : false;
            $categoria = isset($_POST['categoria']) ? (int) $_POST['categoria']: false;
            $usuario = $_SESSION['usuario']['id'];
            //Array errores
        $errores = array();  
        //Validar datos
        //VALIDAR NOMBRE
        if(empty($titulo)  ){
            $errores['nombre'] = "El nombre no es valido";
        }

        if(empty($descripcion)  ){
            $errores['nombre'] = "La descripcion no es valido";
        }
        if(empty($categoria) && !is_numeric($categoria) ){
            $errores['nombre'] = "El nombre no es valido";
        }

        if(count($errores) == 0){
            if(isset($_GET['editar'])){
                $usuario_id = $_SESSION['usuario']['id'];
                $entrada_id = $_GET['editar'];
                $sql = "UPDATE entradas SET titulo = '$titulo', descripcion='$descripcion',categoria_id=$categoria WHERE id = $entrada_id AND usuario_id = $usuario_id";
            
            }else{
                $sql = "INSERT INTO entradas VALUES(NULL, $usuario, $categoria, '$titulo','$descripcion', CURDATE());";

            }
                $guardar = mysqli_query($db, $sql);
                header('Location: index.php');


        }else {
            $_SESSION['errores_entrada'] = $errores;
            if(isset($_GET['editar'])){
                header('Location: editar-entrada?id='.$_GET['editar']);
            }else{
                header('Location: crear-entradas.php');
            }

        
        }
    }
    