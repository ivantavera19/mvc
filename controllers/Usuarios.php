<?php 

class Usuarios extends Controller{

	function __construct(){
		parent::__construct();
	}

	public function index(){
		$Loader = new LoadModel("UsuariosModel");
		$UsuariosModel = new UsuariosModel();
		$Usuarios = $UsuariosModel->getUsuarios();
		$ViewUsuarios = new Layout("Usuarios/usuarios.php", compact("Usuarios"));
	}

}

 ?>