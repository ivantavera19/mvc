<?php 

class ContactosModel extends Model{

	public function getContactos(){
		$result = $this->db->query("select * from contactos");
		return $result->fetchAll();
	}
}

 ?>