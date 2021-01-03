<?php 

class NotaController {
    public function listar(){
        // Modelo
        require_once '../models/nota.php';

        // LOGICA DE LA ACCION DEL CONTROLADOR 
        $nota = new Nota();
        

        
        $notas = $nota->conseguirTodos('notas');

        //vista
        require_once "../views/nota/listar.php";
    }

    public function crear(){
        // MODELO
        require_once '../models/nota.php';

        $nota = new Nota();
        $nota->setUsuario_id(1);
        $nota->setTitulo("Nota desde PHP MVC");
        $nota->setDescripcion("Descripcion de mi nota");
        $guardar = $nota->guardar();

        echo $nota->db->error;
        die();
        

        header("Location: index.php?controller=Nota&action=listar");

    }

    public function borrar(){

    }


}