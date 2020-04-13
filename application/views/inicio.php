<form>
	<h2 align="center">Inicio</h2>
	<hr><br>
	<a href="<?= base_url('publicar') ?>" class="btn btn-primary">Publicar</a>
	<br><br>
	<table class="table table-hover">
	<thead>
  		<tr align="center">
      		<th scope="col">Título</th>
      		<th scope="col">Publicación</th>
	  		<th scope="col">Fecha</th>
			<th scope="col">Usuario</th>
			<th scope="col">Acciones</th>
    	</tr>
  	</thead>
	<tbody>
  	<?php foreach($data as $item): ?>
    	<tr align="center">
      		<td><strong><?= $item->titulo ?></strong></td>
      		<td><?= $item->publicacion ?></td>
	  		<td><?= $item->fecha ?></td>
			<th><?= $item->usuario ?></th>
			<?php if($this->session->usuario == $item->usuario){ ?>
			<th>
				<a href="<?= base_url('publicar/editar/'.$item->id) ?>" class="btn btn-warning" role="button">Editar</a>
			</th>
			<?php } ?>
    	</tr>
	<?php endforeach; ?>
	</tbody>
</table>
</form>
