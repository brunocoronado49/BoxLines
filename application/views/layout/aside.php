<!-- ASIDE -->
<nav id="nav1" class="col-md-2 d-none d-md-block bg-light sidebar">
	<style>
		.sidebar-sticky{
			position: -webkit-sticky;
			position: sticky;
			top: 78px;
			height: calc(100vh - 78px);
			padding-top: .5rem;
			overflow-x: hidden;
			overflow-y: auto;
		}
		a{
			color: black;
		}
	</style>
	<div class="sidebar-sticky" style="margin-top: 1em;">
		<!-- FLASHDATA -->
		<?php if($dat = $this->session->flashdata('msg')): ?>
		<div class="alert alert-primary" role="alert">
			<?= $dat ?>
		</div>
		<?php endif; ?>
		<div class="nav flex-column nav-pills" id="v-pills-tab">
			<a class="nav-link <?= $this->uri->segment(1) == 'dashboard' ? 'active' : ''; ?>" href="<?= base_url('dashboard') ?>" data-toggle="pill">Inicio</a>			
			<a class="nav-link <?= $this->uri->segment(1) == 'perfil' ? 'active' : ''; ?>" href="<?= base_url('perfil') ?>" data-toggle="pill">Perfil</a>
			<a class="nav-link <?= $this->uri->segment(1) == 'users' ? 'active' : ''; ?>" href="<?= base_url('users') ?>" data-toggle="pill">Usuarios</a>
			<a class="nav-link <?= $this->uri->segment(1) == 'contacto' ? 'active' : ''; ?>" href="<?= base_url('contacto') ?>" data-toggle="pill">Contacto</a>
		</div>
	</div>
</nav>

