<?php 
// La posibliidad de compartir atributos y metodos entre clases 

class Persona {
    public $nombre;
    public $apellidos;
    public $altura;
    public $edad;

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getApellidos(){
        return $this->apellidos;
    }

    public function setApellidos($apellidos){
        $this->apellidos = $apellidos;
    }

    public function getAltura(){
        return $this->altura;
    }

    public function setAltura($altura){
        $this->altura = $altura;
    }

    public function getEdad(){
        return $this->edad;
    }

    public function setEdad($edad){
        $this->edad = $edad;
    }

    public function hablar(){
        return "Estoy hablando";
    }

    public function caminar(){
        return "Estoy caminando";
    }
}

class informatico extends Persona {
    public $lenguajes;
    public $experienciaProgramacion;

    public function __construct(){
        $this->lenguajes = "HTML, CSS Y JS";
        $this->experienciaProgramacion = 10;;
    }

    public function sabeLenguajes($lenguajes){
        $this->lenguajes = $lenguajes;
        return $this->lenguajes;
    }
    public function programar(){
        return "Soy programador";
    }

    public function repararOrdenador(){
        return "Reparar ordenadores";
    }

    public function hacerInformatica(){
        return "Estoy escribiendo en word";
    }
}

class Designer extends Informatico{
    public $auditarRedes;
    public $experienciaRedes;

    public function __construct(){
        parent::__construct();

        $this->auditarRedes = "Experto";
        $this->experienciaRedes = 15;
    }
    

    public function auditoria(){
        return "Estoy auditando una red";
    }
}

