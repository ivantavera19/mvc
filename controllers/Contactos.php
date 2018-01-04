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
		$Layout = new Layout("Contactos/index.php", compact("contactos", "telefonos"));
	}

	public function setContacto(){
		if ($_POST) {   
			//ucwords pone la primer letra de la palabra en mayuscula, //strlower hace las palabras minusculas
			$nombres 	= ucwords(strtolower($_POST["nombres"])); 
			$apellidos 	= ucwords(strtolower($_POST["apellidos"]));
			$direccion 	= ucwords(strtolower($_POST["direccion"]));
			$telefonos 	= str_replace(" ", "", $_POST["telefonos"]);
			$cada_telefono = explode(",", $telefonos);
			print_r($cada_telefono);
			echo validar();
		}
		
		/*$LoadModelContacto = new LoadModel("ContactosModel");
		$ContactosModel = new ContactosModel();
		$LoadModelTelefono = new LoadModel("TelefonosModel");
		$TelefonosModel = new TelefonosModel();

		try {
			$TelefonosModel->db->beginTransaction();
			$ContactosModel->db->setContacto($nombres, $apellidos, $direccion);
			$id_contacto = $ContactosModel->db->lastInsertId();
			
			foreach ($telefono as $tel) {
				$TelefonosModel->setTelefonos($id_contacto_guardado, $tel);
			}
			//commit = Consigna una transacción, devolviendo la conexión a la base de datos al modo 'autocommit' hasta que la siguiente llamada a PDO::beginTransaction() inicie una nueva transacción.
			$ContactosModel->db->commit();

		} catch (PDOException $ex) {
			//rollback = Si la base de datos se estableció al modo 'autocommit', esta función restablecerá el modo 'autocommit' después de haber revertido la transacción.
			$ContactosModel->db->rollback();
		}*/
		


	}
}

 ?>