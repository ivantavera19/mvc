<div class="col-lg-8 col-lg-offset-2">
	<center><h2><label class="label label-info">Agenda telefonica</label></h2></center>

	<form method="post" action="Contactos/setContacto">
		<div class="form-group col-lg-5">
			<label>Nombres</label>
			<input class="form-control" type="text" name="nombres" placeholder="Nombres" required="true">
		</div>
		<div class="form-group col-lg-5">
			<label>Apellidos</label>
			<input class="form-control" type="text" name="apellidos" placeholder="Apellidos" required="true">
		</div>
		<div class="clearfix"></div>
		<div class="form-group col-lg-10">
			<label>Direccion</label>
			<input class="form-control" type="text" name="direccion" placeholder="Direccion" required="true">
		</div>
		<div class="clearfix"></div>
		<div class="form-group col-lg-10">
			<label>Telefonos</label>
			<textarea class="form-control" cols="5" placeholder="Telefonos" required="true"></textarea>
		</div>
		<div class="clearfix"></div>
		<div class="btn-group col-lg-10">
			<input type="submit" value="Guardar" class="btn btn-primary">
			<input type="reset" value="Cancelar" class="btn btn-danger">
		</div>
	</form>

	<table class="table table-hover table-striped">
		<tr>
			<td>ID</td>
			<td>NOMBRES</td>
			<td>APELLIDOS</td>
			<td>DIRECCION</td>
			<td>TELEFONO</td>
			<td colspan="2">OPCIONES</td>
		</tr>

		<?php 
			foreach ($data["contactos"] as $contacto) {
				echo "	<tr>
							<td>{$contacto['id_contacto']}</td>
							<td>{$contacto['nombres']}</td>
							<td>{$contacto['apellidos']}</td>
							<td>{$contacto['direccion']}</td>";
				echo "<td>";
			foreach ($data["telefonos"][$contacto["id_contacto"]] as $telefono) {
				echo "<li>{$telefono["telefono"]}</li>";
			}
				echo "</td>";

				echo "
							<td><a href='modificar.php?id_contacto={$contacto['id_contacto']}'>Modificar</a></td>
							<td><a href='eliminar.php?id_contacto={$contacto['id_contacto']}'>Eliminar</a></td>
						</tr>";
			}
		?>
	</table>
</div>