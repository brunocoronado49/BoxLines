<!-- NAV -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<span class="navbar-text navbar-brand">
		LINEABOX
	</span>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto"></ul>
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link disabled" href="#"><strong>Rol: </strong><?= $this->session->rol ?></a>
			</li>
			<li class="nav-item">
				<a class="nav-link disabled" href="#"><strong>Nombre de usuario: </strong><?= $this->session->usuario ?></a>
			</li>
			<li class="nav-item">
				<a class="nav-link disabled" href="">
					<strong>Fecha: </strong>
					<script type="text/javascript">
					var d = new Date();
					document.write(d.getDate(),' / ', + d.getMonth() + 1, ' / ' + d.getFullYear());
					</script>
				</a>
			</li>
			<li class="nav-item" style="margin-left: 2em;">
				<a href="<?= base_url('login/logout')?>" class="btn btn-danger">Salir</a>
			</li>
		</ul>
	</div>
</nav>