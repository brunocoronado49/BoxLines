<h2 align="center">Realiza una publicación</h2>
<hr>
<br>
<form action="<?= base_url('publicar/publicar') ?>" method="POST">
	<div class="form-group">
		<input type="text" class="form-control" name="titulo" placeholder="Titulo de la publicación">
		<div class="text-danger"><?= form_error('titulo') ?></div>
		<br>
    	<textarea name="publicacion" class="form-control" rows="3" placeholder="Publicacion"></textarea>
		<div class="text-danger"><?= form_error('publicacion') ?></div>
		<br>
		<label for="" hidden>Usuario</label>
		<input hidden type="text" class="form-control" name="usuario" value="<?= $this->session->usuario ?>" readonly>
		<br>
		<label for="">Ingresa la fecha de la publicación</label>
		<input type="date" name="fecha">
		<div class="text-danger"><?= form_error('fecha') ?></div>
  	</div>
  	<button type="submit" class="btn btn-primary">Publicar</button>
</form>
<br>