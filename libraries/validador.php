<?php 

function validar(){
	echo "validador";
}

function validarTelefono(string $telefono): int{
	return preg_match("/^\d{4}-?\d{4}$/", $telefono);
}

function verificarTelefonos(array $telefonos):array{
	$numeroInvalido = [];
	$i = 0;
	foreach ($telefonos as $telefono) {
		$numeroInvalido[$i] = $telefono;
		$i++;
	}
}
 return $numeroInvalido;

?>