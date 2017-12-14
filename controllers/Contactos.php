<?php 

class Contactos extends Controller{

	function __construct(){
		parent::__construct();
	}

	public function index(){
		$Loader = new LoadModel("ContactosModel");
		$ContactosModel = new ContactosModel();
		$Contactos = $ContactosModel->getContactos();
		$ViewContactos = new Layout("Contactos/index.php", compact("Contactos"));
	}
}

 ?>