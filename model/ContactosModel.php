<?php 

class ContactosModel extends Model{

	//Me trae todos los datos de la tabla
	public function getContactos(){
		$pst = $this->db->query("select * from contactos");
		$pst->execute();
		return $pst->fetchAll();
	}

	//Me trae solo una fila de la tabla
	public function getContacto(int $id_contacto){
		$pst = $this->db->prepare("select * from contactos where id_contacto = :id_contacto");
		$pst->bindParam(":id_contacto", $id_contacto, PDO::PARAM_INT);
		$pst->execute();
		return $pst->fetch();
	}

	//Inserta un contacto en la tabla
	public function setContacto(string $nombre, string $apellido, string $direccion){
		$pst = $this->db->prepare("insert into contactos values (null, :nombre, :apellido, :direccion)");
		$pst->bindParam(":nombre", $nombre, PDO::PARAM_STR);
		$pst->bindParam(":apellido", $apellido, PDO::PARAM_STR);
		$pst->bindParam(":direccion", $direccion, PDO::PARAM_STR);
		return $pst->execute();
	}

	//Actualiza un contacto en la tabla
	public function updateContacto(int $id_contacto, string $nombre, string $apellido, string $direccion){
		$pst = $this->db->prepare("update contactos set nombre = :nombre, apellido = :apellido, direccion = : direccion 
									where id_contacto = :id_contacto");
		$pst->bindParam(":id_contacto", $id_contacto, PDO::PARAM_INT);
		$pst->bindParam(":nombre", $nombre, PDO::PARAM_STR);
		$pst->bindParam(":apellido", $apellido, PDO::PARAM_STR);
		$pst->bindParam(":direccion", $direccion, PDO::PARAM_STR);
		return $pst->execute();
	}

	//Elimina un contacto en la tabla
	public function deleteContacto(int $id_contacto){
		$pst = $this->db->prepare("delete from contacto where id_contacto = :id_contacto");
		$pst->bindParam(":id_contacto", $id_contacto, PDO::PARAM_INT);
		return $pst->execute();
	}
}

 ?>