<?php 

class TelefonosModel extends Model{


	public function getTelefonos(int $id){
		$pst = $this->db->prepare("select * from telefono where idContacto = :id");
		$pst->bindParam(":id", $id, PDO::PARAM_INT);
		return $pst->fetchAll();
	}

	public function setTelefonos(int $id, string $telefono){
		$pst = $this->db->prepare("insert into telefonos values (null, :id, :telefono)");
		$pst->bindParam(":id", $id, PDO::PARAM_INT);
		$pst->bindParam(":telefono", $telefono, PDO::PARAM_STR);
		return $pst->execute();
	}

	public function deleteTelefonos(int $id){
		$pst = $this->db->prepare("delete from telefonos where idContacto = :id")
		$pst->bindParam(":id", $id, PDO::PARAM_INT);
		return $pst->execute();
	}
}


 ?>