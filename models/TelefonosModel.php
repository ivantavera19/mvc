<?php 

class TelefonosModel extends Model{

	public function getTelefonos($id_contacto){
		$pst = $this->db->prepare("SELECT * FROM telefonos WHERE id_contacto = :id_contacto");
		$pst->bindParam(":id_contacto", $id_contacto);
		$pst->execute();
		return $pst->fetchAll();
	}

	public function setTelefonos($id_contacto, $telefono){
		$pst = $this->db->prepare("INSERT INTO telefonos VALUES (null, :id_contacto, :telefono)");
		$pst->bindParam(":id_contacto", $id_contacto);
		$pst->bindParam(":telefono", $telefono);
		return $pst->execute();
	}

	public function deleteTelefonos(int $id_contacto){
		$pst = $this->db->prepare("DELETE FROM telefonos WHERE id_contacto = :id_contacto");
		$pst->bindParam(":id_contacto", $id_contacto);
		return $pst->execute();
	}
}

 ?>