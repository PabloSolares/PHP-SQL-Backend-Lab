<?php 
namespace PanelAdministrador;
class Usuario{
	public $nombre;
	public $email;
	
	public function __construct() {
		$this->nombre = "Pablo Solares";
		$this->email = "Pablo@Solares.com";
    }
    function informacion(){
        echo __NAMESPACE__;
    }
}