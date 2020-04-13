<h2 align="center">Usuario: <?= $user['usuario']; ?></h2>
<hr>
<br>
<table class="table table-borderless">
	<thead class="thead">
		<tr>
			<th></th>
			<th scope="col">Datos</th>
			<th scope="col">Información</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th scope="row"><img src="<?=base_url('assets/img/user.png')?>" style="border-radius:50%; width:220px; height:220px; overflow:hidden;"></th>
			<td>
				<p class="card-title"><strong>Nombre: </strong><?= $user['nombre'], $user['apellido']; ?></p>
				<p class="card-text"><strong>Edad: </strong><?= $user['edad']; ?></p>
				<p class="card-text"><strong>Genero: </strong><?= $user['genero']; ?></p>
				<p class="card-text"><strong>Peso: </strong><?= $user['peso']; ?></p>
				<p class="card-text"><strong>Estatura: </strong><?= $user['est']; ?></p>
				<p class="card-text"><strong>Rol: </strong><?= $user['rol']; ?></p>
				<p class="card-text"><strong>País: </strong><?= $user['pais']; ?></p>
			</td>
			<td>
				<p class="card-text"><strong>Usuario: </strong><?= $user['usuario']; ?></p>
				<p class="card-text"><strong>Correo: </strong><?= $user['correo']; ?></p>
				<p class="card-text"><strong>Teléfono: </strong><?= $user['telefono']; ?></p>
				<p class="card-text"><strong>Residencia: </strong><?= $user['residencia']; ?></p>
			</td>
		</tr>
	</tbody>
</table>
<br>
<hr>
<br>
<h3>Publicaciones</h3>
<br>
<table class="table table-hover">
	<thead>
  		<tr>
      		<th scope="col">Título</th>
      		<th scope="col">Publicación</th>
	  		<th scope="col">Fecha</th>
    	</tr>
  	</thead>
	<tbody>
  		<?php foreach($data as $item): ?>
		<?php if($user['usuario'] == $item->usuario){ ?>
    	<tr>
      		<td><strong><?= $item->titulo ?></strong></td>
      		<td><?= $item->publicacion ?></td>
	  		<td><?= $item->fecha ?></td>
    	</tr>
		<?php } ?>
		<?php endforeach; ?>
	</tbody>
</table>

