<?php 

class Almacen extends Controller{

	function __construct(){
		parent::__construct();
	}

	public function index(){
		$ViewUsuarios = new Views("Usuarios/usuarios.php", 2);
	}

	public function getAlmacen(){
		echo "Este es el metodo getAlmacen";
	}
}

 ?>