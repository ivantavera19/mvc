<?php 

	require("core/Controller.php");
	require("core/Config.php");
	require("core/Views.php");
	require("core/Model.php");
	require("core/LoadModel.php");
	require("core/Layout.php");
	require("core/Functions.php");

	foreach ($libraries as $librarie) {
		require("libraries/$librarie".".php");
	}

	if ($_GET && isset($_GET["controller"])) {
		$default_controller = $_GET["controller"];
		if (file_exists("controllers/".$default_controller.".php")) {
			require("controllers/".$default_controller.".php");
		}else{
			die("Controlador no encontrado.");
		}

	}else{
		if (file_exists("controllers/".$default_controller.".php")) {
			require("controllers/".$default_controller.".php");
		}else{
			die("Controlador no encontrado.");
		}
	}

$bek = new $default_controller();

 ?>