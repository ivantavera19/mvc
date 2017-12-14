<?php 

class ContactosModel extends Model{

	//Me trae todos los datos de la tabla
	public function getContactos(){
		$query = $this->db->query("select * from contactos");
		return $query->fetchAll();
	}

	//Me trae solo una fila de la tabla
	public function getContacto(int $id){
		$pst = $this->db->prepare("select * from contactos where id = :id");
		$pst->bindParam(":id", $id, PDO::PARAM_INT);
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
	public function updateContacto(int $id, string $nombre, string $apellido, string $direccion){
		$pst = $this->db->prepare("update contactos set nombre = :nombre, apellido = :apellido, direccion = : direccion 
									where id = :id");
		$pst->bindParam(":id", $id, PDO::PARAM_INT);
		$pst->bindParam(":nombre", $nombre, PDO::PARAM_STR);
		$pst->bindParam(":apellido", $apellido, PDO::PARAM_STR);
		$pst->bindParam(":direccion", $direccion, PDO::PARAM_STR);
		return $pst->execute();
	}

	//Elimina un contacto en la tabla
	public function deleteContacto(int $id){
		$pst = $this->db->prepare("delete from contacto where id = :id");
		$pst->bindParam(":id", $id, PDO::PARAM_INT);
		return $pst->execute();
	}
}

 ?>