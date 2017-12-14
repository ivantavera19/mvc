<?php 

class TelefonosModel extends Model{


	public function getTelefonos(int $id){
		$pst = $this->db->prepare("select * from telefono where idContacto = :id");
		$pst->bindParam(":id", $id, PDO::PARAM_INT);
		return $pst->fetchAll();
	}
}


 ?>