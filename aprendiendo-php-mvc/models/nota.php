<?php 
require_once 'ModeloBase.php';
class Nota extends ModeloBase{
    public $usuario_id;
    public $titulo;
    public $descripcion;

    public function __construct()
    {
        parent::__construct();
    }

    function getUsuario_id(){
        return $this->nombre;
    }

    function getTitulo(){
        return $this->contenido;
    }

    function setUsuario_id($usuario_id){
        $this->usuario_id = $usuario_id;
    }

    function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    function getDescripcion(){
        return $this->contenido;
    }

    function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }




    public function guardar(){
        $sql = "INSERT INTO notas(usuario_id,descripcion,fecha) VALUES ({$this->usuario_id}, '{$this->titulo}', '{$this->descripcion}', CURDATE())";
       
        $guardado = $this->db->query($sql);

        return $guardado;
    }
}