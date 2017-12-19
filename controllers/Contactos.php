<?php 

class Contactos extends Controller{

	public function index(){
		$Model = new LoadModel("ContactosModel");
		$Model = new LoadModel("TelefonosModel");
		$ContactosModel = new ContactosModel();
		$TelefonosModel = new TelefonosModel();
		$contactos = $ContactosModel->getContactos();
		$telefonos = [];
		foreach ($contactos as $contacto) {
			$telefonos[$contacto["id_contacto"]] = $TelefonosModel->getTelefonos($contacto["id_contacto"]);
		}
		print_r($telefonos);
		$Layout = new Layout("Contactos/index.php", compact("contactos"));
	}
}

 ?>