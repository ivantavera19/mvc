<?php 

class TelefonosModel extends Model{

	public function getTelefonos(int $id_contacto){
		$pst = $this->db->prepare("SELECT * FROM telefonos WHERE id_contacto = :id_contacto");
		$pst->bindParam(":id_contacto", $id_contacto, PDO::PARAM_INT);
		return $pst->fetchAll();
	}

	public function setTelefonos(int $id_contacto, string $telefono){
		$pst = $this->db->prepare("INSERT INTO telefonos VALUES (null, :id_contacto, :telefono)");
		$pst->bindParam(":id_contacto", $id_contacto, PDO::PARAM_INT);
		$pst->bindParam(":telefono", $telefono, PDO::PARAM_STR);
		return $pst->execute();
	}

	public function deleteTelefonos(int $id_contacto){
		$pst = $this->db->prepare("DELETE FROM telefonos WHERE id_contacto = :id_contacto");
		$pst->bindParam(":id_contacto", $id_contacto, PDO::PARAM_INT);
		return $pst->execute();
	}
}

 ?>