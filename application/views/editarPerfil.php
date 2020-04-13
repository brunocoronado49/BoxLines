<h2>Registro</h2>
<br>
<form action="<?= base_url('perfil/update') ?>" method="POST">
	<div class="row">
		<div class="col">
			<label for="">Usuario</label>
			<input name="usuario" type="text" class="form-control" value="<?= set_value('usuario', isset($perfil['usuario']) ?  $perfil['usuario'] : '') ?>">
			<div class="text-danger"><?= form_error('usuario') ?></div>
		</div>
		<input type="hidden" value="<?= set_value('_id', isset($perfil['id']) ?  $perfil['id'] : '') ?>" name="_id">
		<div class="col-5">
			<label for="">Nombre</label>
			<input name="nombre" type="text" class="form-control" value="<?= set_value('nombre', isset($perfil['nombre']) ?  $perfil['nombre'] : '') ?>">
			<div class="text-danger"><?= form_error('nombre') ?></div>
		</div>
		<div class="col">
			<label for="">Apellidos</label>
			<input name="apellido" type="text" class="form-control" value="<?= set_value('apellido', isset($perfil['apellido']) ?  $perfil['apellido'] : '') ?>">
			<div class="text-danger"><?= form_error('apellido') ?></div>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-7">
			<label for="">Correo</label>
			<input name="correo" type="email" class="form-control" value="<?= set_value('correo', isset($perfil['correo']) ?  $perfil['correo'] : '') ?>">
			<div class="text-danger"><?= form_error('correo') ?></div>
		</div>
		<div class="col">
			<label for="">Teléfono</label>
			<input name="telefono" type="text" class="form-control" value="<?= set_value('telefono', isset($perfil['telefono']) ?  $perfil['telefono'] : '') ?>">
			<div class="text-danger"><?= form_error('telefono') ?></div>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col">
			<label for="">Edad</label>
			<input name="edad" type="text" class="form-control" value="<?= set_value('edad', isset($perfil['edad']) ?  $perfil['edad'] : '') ?>">
			<div class="text-danger"><?= form_error('edad') ?></div>
		</div>
		<div class="col">
			<label for="">Genero</label>
			<select name="genero" class="custom-select">
				<option selected-value=""><?= set_value('genero', isset($perfil['genero']) ?  $perfil['genero'] : '') ?></option>
				<option value="Masculino">Masculino</option>
				<option value="Femenino">Femenino</option>
				<option value="Otro">Otro</option>
			</select>
			<div class="text-danger"><?= form_error('genero') ?></div>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col">
			<label for="">Peso</label>
			<input name="peso" type="text" class="form-control" placeholder="KG" value="<?= set_value('peso', isset($perfil['peso']) ?  $perfil['peso'] : '') ?>">
			<div class="text-danger"><?= form_error('peso') ?></div>
		</div>
		<div class="col">
			<label for="">Estatura</label>
			<input name="est" type="text" class="form-control" placeholder="CM" value="<?= set_value('est', isset($perfil['est']) ?  $perfil['est'] : '') ?>">
			<div class="text-danger"><?= form_error('est') ?></div>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col">
			<label for="">Rol</label>
			<select name="rol" class="custom-select">
				<option selected-value=""><?= set_value('rol', isset($perfil['rol']) ?  $perfil['rol'] : '') ?></option>
				<option name="rol">Matchmaker</option>
				<option name="rol">Boxeador</option>
				<option name="rol">Ambos</option>
			</select>
			<div class="text-danger"><?= form_error('rol') ?></div>
		</div>
		<div class="col">
			<label for="">País</label>
			<select name="pais" class="custom-select">
				<option selected-value=""><?= set_value('pais', isset($perfil['pais']) ?  $perfil['pais'] : '') ?></option>
				<option name="pais">Afganistán</option>
				<option name="pais">Argentina</option>
				<option name="pais">Australia</option>
				<option name="pais">Bélgica</option>
				<option name="pais">Bolivia</option>
				<option name="pais">Brasil</option>
				<option name="pais">Canadá</option>
				<option name="pais">Chile</option>
				<option name="pais">China</option>
				<option name="pais">Colombia</option>
				<option name="pais">Corea del Norte</option>
				<option name="pais">Corea del Sur</option>
				<option name="pais">Costa Rica</option>
				<option name="pais">Dominica</option>
				<option name="pais">El Salvador</option>
				<option name="pais">España</option>
				<option name="pais">Estados Unidos</option>
				<option name="pais">Filipinas</option>
				<option name="pais">Francia</option>
				<option name="pais">Georgia</option>
				<option name="pais">Grecia</option>
				<option name="pais">Honduras</option>
				<option name="pais">India</option>
				<option name="pais">Italia</option>
				<option name="pais">Jamaica</option>
				<option name="pais">Japón</option>
				<option name="pais">Kenia</option>
				<option name="pais">Libia</option>
				<option name="pais">Marruecos</option>
				<option name="pais">México</option>
				<option name="pais">Mongolia</option>
				<option name="pais">Nigeria</option>
				<option name="pais">Noruega</option>
				<option name="pais">Paraguay</option>
				<option name="pais">Perú</option>
				<option name="pais">Portugal</option>
				<option name="pais">Rusia</option>
				<option name="pais">Singapur</option>
				<option name="pais">Siria</option>
				<option name="pais">Suecia</option>
				<option name="pais">Tailandia</option>
				<option name="pais">Tanzania</option>
				<option name="pais">Turquía</option>
				<option name="pais">Uruguay</option>
				<option name="pais">Venezuela</option>
				<option name="pais">Vietnam</option>
				<option name="pais">Zimbabue</option>
			</select>
			<div class="text-danger"><?= form_error('pais') ?></div>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-5">
			<label for="">Residencia actual</label>
			<input name="residencia" type="text" class="form-control" value="<?= set_value('residencia', isset($perfil['residencia']) ?  $perfil['residencia'] : '') ?>">
			<div class="text-danger"><?= form_error('residencia') ?></div>
		</div>
		<div class="col-5">
			<label for="">Contraseña</label>
			<input name="contrasena" type="text" class="form-control" value="<?= set_value('contrasena', isset($perfil['contrasena']) ?  $perfil['contrasena'] : '') ?>">
			<div class="text-danger"><?= form_error('contrasena') ?></div>
		</div>
	</div>
	<br>
	<div class="form-group">
		<button type="submit" class="btn btn-primary">Enviar</button>
		<button type="reset" class="btn btn-danger">Borrar</button>
	</div>
</form>