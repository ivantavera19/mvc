<?php 

class ContactosModel extends Model{

	public function getContactos(){
		$query  = $this->db->query("SELECT * FROM contactos");
		return $query->fetchAll();
	}

	public function setContacto($nombres,$apellidos,$direccion){
		$pst = $this->db->prepare("INSERT INTO contactos VALUES (null, :nombres, :apellidos, :direccion)");
		$pst->bindParam(":nombres", $nombres);
		$pst->bindParam(":apellidos", $apellidos);
		$pst->bindParam(":direccion", $direccion);
		return $pst->execute();
	}

	public function updateContacto($id_contacto,$nombres,$apellidos,$direccion){
		$pst = $this->db->prepare("	UPDATE contactos 
									SET nombres = :nombres, 
										apellidos = :apellidos, 
										direccion = :direccion
									WHERE id_contacto = :id_contacto");
		$pst->bindParam(":id_contacto", $id_contacto);
		$pst->bindParam(":nombres", $nombres);
		$pst->bindParam(":apellidos", $apellidos);
		$pst->bindParam(":direccion", $direccion);
		return $pst->execute();
	}

	public function deleteContacto($id_contacto){
		$pst = $this->db->prepare("DELETE from contactos WHERE id_contacto = :id_contacto");
		$pst->bindParam(":id_contacto", $id_contacto);
		return $pst->execute();
	}

	public function getContacto($id_contacto){
		$pst = $this->db->prepare("SELECT * FROM contactos WHERE id_contacto = :id_contacto");
		$pst->bindParam(":id_contacto", $id_contacto);
		$pst->execute();
		return $pst->fetch();
	}
}

 ?>