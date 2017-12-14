<?php 

class UsuariosModel extends Model{

	public function getUsuarios(){

		$result = $this->db->query("select * from usuarios");
		return $result->fetchAll();
	}
}

 ?>