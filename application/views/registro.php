<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Registro</title>
</head>
<style>
	*{
		padding: 0;
		margin: 0;
	}
	body{
		color: #fff;
		background: #2f3640;
	}
</style>
<body>
	<div class="container-fluid">
		<br>
		<div class="row justify-content-lg-center">
 			<div class="col-lg-6">
	 			<h2>Registro</h2>
				<br>
				<form action="<?= base_url('registro/create') ?>" method="POST">
					<div class="row">
						<div class="col">
							<label for="">Usuario</label>
							<input name="usuario" type="text" class="form-control">
						</div>
						<div class="col-5">
							<label for="">Nombre</label>
							<input name="nombre" type="text" class="form-control">
						</div>
						<div class="col">
							<label for="">Apellidos</label>
							<input name="apellido" type="text" class="form-control">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-7">
							<label for="">Correo</label>
							<input name="correo" type="email" class="form-control">
						</div>
						<div class="col">
							<label for="">Teléfono</label>
							<input name="telefono" type="text" class="form-control">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col">
							<label for="">Edad</label>
							<input name="edad" type="text" class="form-control">
						</div>
						<div class="col">
							<label for="">Genero</label>
							<select name="genero" class="custom-select">
								<option selected-value="">Selecciona tu genero</option>
								<option value="Masculino">Masculino</option>
								<option value="Femenino">Femenino</option>
								<option value="Otro">Otro</option>
							</select>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col">
							<label for="">Peso</label>
							<input name="peso" type="text" class="form-control" placeholder="KG">
						</div>
						<div class="col">
							<label for="">Estatura</label>
							<input name="est" type="text" class="form-control" placeholder="CM">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col">
							<label for="">Rol</label>
							<select name="rol" class="custom-select">
								<option selected-value="">Selecciona tu rol</option>
								<option name="rol">Matchmaker</option>
								<option name="rol">Boxeador</option>
								<option name="rol">Ambos</option>
							</select>
						</div>
						<div class="col">
							<label for="">País</label>
							<select name="pais" class="custom-select">
								<option selected-value="">Selecciona tu país</option>
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
								<option name="pais">Panamá</option>
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
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col">
							<label for="">Residencia actual</label>
							<input name="residencia" type="text" class="form-control">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col">
							<label for="">Contraseña</label>
							<input name="contrasena" type="text" class="form-control">
						</div>
						<div class="col">
							<label for="">Confirmar contraseña</label>
							<input name="c_confirm" type="password_confirm" class="form-control">
						</div>
					</div>
					<br><br>
					<div class="form-group">
						<button type="submit" class="btn btn-danger">Enviar</button>
						<button type="reset" class="btn btn-warning">Borrar</button>
						<a href="<?= base_url('login') ?>" class="btn btn-warning">Volver</a>
					</div>
					<h3 style="color: red"><?php echo validation_errors(); ?></h3>
					<h3><?= isset($msg) ? $msg : '' ?></h3>
				</form>
			</div>
		</div>
	</div>
	<br><br>
</body>
</html>