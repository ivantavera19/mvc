<?php 

class ContactosModel extends Model{

	public function getContactos(){
		$query  = $this->db->query("SELECT * FROM contactos");
		return $query->fetchAll();
	}

	public function setContacto(string $nombres, string $apellidos, string $direccion){
		$pst = $this->db->prepare("INSERT INTO contactos VALUES (null, :nombres, :apellidos, :direccion)");
		$pst->bindParam(":nombres", $nombres, PDO::PARAM_STR);
		$pst->bindParam(":apellidos", $apellidos, PDO::PARAM_STR);
		$pst->bindParam(":direccion", $direccion, PDO::PARAM_STR);
		return $pst->execute();
	}

	public function updateContacto(int $id_contacto, string $nombres, string $apellidos, string $direccion){
		$pst = $this->db->prepare("	UPDATE contactos 
									SET nombres = :nombres, 
										apellidos = :apellidos, 
										direccion = :direccion
									WHERE id_contacto = :id_contacto");
		$pst->bindParam(":id_contacto", $id_contacto, PDO::PARAM_INT);
		$pst->bindParam(":nombres", $nombres, PDO::PARAM_STR);
		$pst->bindParam(":apellidos", $apellidos, PDO::PARAM_STR);
		$pst->bindParam(":direccion", $direccion, PDO::PARAM_STR);
		return $pst->execute();
	}

	public function deleteContacto(int $id_contacto){
		$pst = $this->db->prepare("DELETE from contactos WHERE id_contacto = :id_contacto");
		$pst->bindParam(":id_contacto", $id_contacto, PDO::PARAM_INT);
		return $pst->execute();
	}

	public function getContacto(int $id_contacto){
		$pst = $this->db->prepare("SELECT * FROM contactos WHERE id_contacto = :id_contacto");
		return $pst->fetch();
	}
}

 ?>