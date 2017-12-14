<?php 

class Layout{

	function __construct($view, $data=null){

		require("Config.php");
		if (file_exists("./views/$view")) {

			if (file_exists("./views/Layout/$header")){require("./views/Layout/".$header);} else {die("Encabezado no encontrado");}
				require("./views/$view");
			if (file_exists("./views/Layout/$footer")){require("./views/Layout/".$footer);} else {die("Pie no encontrado");} 

		}else{
			die("Sitio no encontrado");
		}
	}
}

?>