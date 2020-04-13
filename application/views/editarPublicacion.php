<h2 align="center">Edita la publicación</h2>
<hr>
<br>
<form action="<?= base_url('publicar/update') ?>" method="POST">
	<div class="form-group">
		<input type="text" class="form-control" name="titulo" value="<?= set_value('titulo', isset($publicar['titulo']) ?  $publicar['titulo'] : '') ?>">
		<input type="hidden" value="<?= set_value('_id', isset($publicar['id']) ?  $publicar['id'] : '') ?>" name="_id">
		<div class="text-danger"><?= form_error('titulo') ?></div>
		<br>
    	<textarea name="publicacion" class="form-control" rows="3" value="<?= set_value('publicacion', isset($publicar['publicacion']) ?  $publicar['publicacion'] : '') ?>"></textarea>
		<div class="text-danger"><?= form_error('publicacion') ?></div>
		<br>
		<label for="">Usuario</label>
		<input type="text" class="form-control" name="usuario" value="<?= $this->session->usuario ?>" readonly>
		<br>
		<label for="">Ingresa la fecha de la publicación</label>
		<input type="date" name="fecha" value="<?= set_value('fecha', isset($publicar['fecha']) ?  $publicar['fecha'] : '') ?>">
		<div class="text-danger"><?= form_error('fecha') ?></div>
  	</div>
  	<button type="submit" class="btn btn-primary">Actualizar</button>
</form>
<br>