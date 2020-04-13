<h2 align="center">Perfil</h2>
<hr>
<table class="table table-borderless">
	<thead class="thead">
		<tr>
			<th></th>
			<th scope="col">INFORMACIÓN PERSONAL</th>
			<th scope="col"> DATOS</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th scope="row"><img src="<?=base_url('assets/img/hq.jpg')?>" class="img-responsive" style="border-radius:50%; width:220px; height:220px; overflow:hidden;"></th>
			<td>
				<p class="card-text"><strong>Nombre completo: </strong><?= $this->session->nombre,  $this->session->apellido ?></p>
				<p class="card-text"><strong>Edad: </strong><?= $this->session->edad ?></p>
				<p class="card-text"><strong>Genero: </strong><?= $this->session->genero ?></p>
				<p class="card-text"><strong>Teléfono: </strong><?= $this->session->telefono ?></p>
				<p class="card-text"><strong>Residencia: </strong><?= $this->session->residencia ?></p>
			</td>
			<td>
				<p class="card-title"><strong>Nombre de usuario: </strong><?= $this->session->usuario ?></p>
				<p class="card-text"><strong>Correo: </strong><?= $this->session->correo ?></p>
				<p class="card-text"><strong>Peso: </strong><?= $this->session->peso ?> kg</p>
				<p class="card-text"><strong>Estatura: </strong><?= $this->session->est ?> cm</p>
				<p class="card-text"><strong>Rol: </strong><?= $this->session->rol ?></p>
				<p class="card-text"><strong>País: </strong><?= $this->session->pais ?></p>
			</td>
			<td>
				<a href="<?= base_url('perfil/editPerfil/'.$this->session->id) ?>" class="btn btn-warning">Editar Perfil</a>
			</td>
		</tr>
	</tbody>
</table>
<br>
<a href="<?= base_url('publicar') ?>" class="btn btn-primary">Publicar</a>
<br><hr><br>
<br>

<table class="table table-hover">
	<thead>
  		<tr>
      		<th scope="col">Título</th>
      		<th scope="col">Publicación</th>
	  		<th scope="col">Fecha</th>
			<th scope="col">Acciones</th>
    	</tr>
  	</thead>
	<tbody>
	<?php foreach($data as $item): ?>
	<?php if($this->session->usuario == $item->usuario){ ?>
    	<tr>
      		<td><strong><?= $item->titulo ?></strong></td>
      		<td><?= $item->publicacion ?></td>
	  		<td><?= $item->fecha ?></td>
			<td>
				<a href="<?= base_url('publicar/editar/'.$item->id) ?>" class="btn btn-warning" role="button">Editar</a>
				<a href="" data-id="<?= $item->id ?>" id="delete" class="btn btn-danger" role="button">Borrar</a>
			</td>
    	</tr>
	<?php } ?>
	<?php endforeach; ?>
	</tbody>
</table>

