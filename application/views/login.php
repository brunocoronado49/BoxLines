<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Login</title>
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
	<br>
	<h1 style="color:red"><center>BOXAPP</center></h1>
	<div class="container" style="margin-top:4em">
		<div class="row justify-content-lg-center">
 			<div class="col-lg-6">
	 			<h3>Login</h3>
				<br>
				<form action="<?=base_url('login/validate')?>" method="POST" id="frm_login">
					<div class="row">
						<div class="col" id="email">
							<label for="">Correo</label>
							<input name="email" type="email" class="form-control">
							<div class="invalid-feedback"></div>
						</div>
						<div class="col" id="password">
							<label for="">Contraseña</label>
							<input name="password" type="password" class="form-control">
							<div class="invalid-feedback"></div>
						</div>
					</div>
					<br><br>
					<div class="form-group">
						<button type="submit" class="btn btn-danger">Entrar</button>
					</div>
					<div class="form-group" id="alert"></div>
				</form>
				<br>
				<label for="">¿No tienes cuenta?</label><br>
				<a href="<?=base_url('registro')?>" class="btn btn-danger">Regístrate</a>
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="<?= base_url('assets/js/auth/login.js') ?>"></script>
</body>
</html>