<h2 align="center">Usuarios en el sistema</h2>
<hr>
<br>
<table class="table table-hover table-borderless">
	<thead class="thead-dark">
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Nombre</th>
			<th scope="col">Género</th>
			<th scope="col">Rol</th>
			<th scope="col">Acciones</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($data as $item): ?>
		<tr>
			<th scope="row"><?= $item->id ?></th>
			<td><?= $item->usuario ?></td>
			<td><?= $item->genero ?></td>
			<td><?= $item->rol ?></td>
			<td><a href="<?= $this->session->id == $item->id ? base_url('perfil') :  base_url('users/perfilUser/'.$item->id); ?>" class="btn btn-primary">Ir a perfil</a></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<?= $this->pagination->create_links(); ?>
	
	
