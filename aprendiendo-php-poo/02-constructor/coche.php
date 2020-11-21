<?php  
class Coche{
    //atributos o Propiedades (variables)
    //Public: PODEMOS ACCEDDER DEESDE CUALQUIER LUGAR, DENTRO DE CLASE ACTUAL DENTRO DE CLASES QUE HERDEN ESTA CLASE
    public $color ;
    
    //pROTECTED: podemos acceder desde la lase que los define y desde clses hereden esta clase
    protected $marca ;
    
    //PRIVATE: Solo se puede acceder desde esta clase
    private $modelo ;
    public $velocidad ;
    public $caballaje ;
    public $plazas ;

    public function __construct($color, $marca, $modelo, $velocidad,$caballaje,$plazas){
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad ;
        $this->caballaje = $caballaje;
        $this->plazas = $plazas;
        


    }
    //Metodos, son acciones que hace el objeto (antes funciones)

    public function getColor(){
        // Busca en esta clase la propiedad x
        return $this->  color;
    }

    public function setColor($color){
        $this->color = $color;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    public function acelerar(){
        $this->velocidad++;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function frenar(){
        $this->velocidad--;
    }

    public function getVelocidad(){
        return $this->velocidad;
    }
    public function setMarca($marca){
        $this->marca = $marca;
    }

    public function mostrarInformacion(Coche $miObjeto){
        if(is_object($miObjeto)){
            $informacion = "<h1>Informacion del coche</h1>";
            $informacion .= "Color: ". $miObjeto->color;
            $informacion .= "<br>Modelo: ". $miObjeto->modelo;
            $informacion .= "<br>Velocidad: ". $miObjeto->velocidad;
        }else{
            $informacion = "Tu dato es este: $miObjeto" ;
        }

        return $informacion;
    }

}