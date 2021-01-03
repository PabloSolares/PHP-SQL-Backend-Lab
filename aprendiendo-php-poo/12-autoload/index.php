<?php



require_once 'autoload.php';


// $usuario = new Usuario();
// echo $usuario->nombre;
// echo "<br>";
// echo $usuario->email;

// $categoria = new Categoria();
// echo "</br>". $categoria->nombre;


//NAMESPACES

use MisClases\Usuario;
use MisClases\Categoria;
use MisClases\Entrada;
use PanelAdministrador\Usuario as UsuarioAdmin;


class Principal{
	public $usuario;
	public $categoria;
	public $entrada;
	
	public function __construct() {
		$this->usuario = new Usuario();
		$this->categoria = new Categoria();
        $this->entrada = new Entrada();
		
        
    }
    function getUsuario() {
		return $this->usuario;
	}

	function getCategoria() {
		return $this->categoria;
	}

	function getEntrada() {
		return $this->entrada;
	}

	function setUsuario($usuario) {
		$this->usuario = $usuario;
	}

	function setCategoria($categoria) {
		$this->categoria = $categoria;
	}

	function setEntrada($entrada) {
		$this->entrada = $entrada;
    }
    
    
}
//OBJETO PRINCIPAL
$principal = new Principal();

//var_dump($principal->usuario);
$metodos = get_class_methods($principal);

$busqueda = array_search('setApellidos', $metodos);
var_dump($busqueda);
// OBJETO OTRO PAQUETE
 $usuario = new UsuarioAdmin();
 $usuario->informacion();

// Comprobar si existe una clase

$class = @class_exists('MisClases\Usuario');
if($class){
    echo "<h1>La clase SI existe</h1>";
}else{
    echo "<h1>La clase NO existe</h1>";
}

