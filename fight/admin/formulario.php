<?php
// Plantilla de formulario compartida entre alta y edición.
?>
<form enctype="multipart/form-data" method="POST" action="<?= e($accion) ?>" class="form-admin">
<input type="hidden" name="csrf" value="<?= e(csrf_token()) ?>">
<?php if (!empty($producto['id'])): ?><input type="hidden" name="id" value="<?= (int)$producto['id'] ?>"><?php endif; ?>
<label>Nombre <input name="nombre" required maxlength="160" value="<?= e($producto['nombre']) ?>"></label>
<label>Descripción <textarea name="descripcion" required rows="4"><?= e($producto['descripcion']) ?></textarea></label>
<label>Categoría <select name="categoria_id" required><?php foreach ($categorias as $c): ?><option value="<?= (int)$c['id'] ?>" <?= (int)$producto['categoria_id']===(int)$c['id']?'selected':'' ?>><?= e($c['nombre']) ?></option><?php endforeach; ?></select></label>
<label>Precio <input name="precio" type="number" min="0" step="0.01" required value="<?= e($producto['precio']) ?>"></label>
<label>Stock <input name="stock" type="number" min="0" step="1" required value="<?= e($producto['stock']) ?>"></label>
<label>Imagen actual (ruta dentro de img/) <input name="imagen" maxlength="255" readonly value="<?= e($producto['imagen']) ?>"></label>
<label>Seleccionar imagen desde tu computadora <input type="file" name="imagen_archivo" accept="image/jpeg,image/png,image/webp"></label>
<p>JPG, PNG o WEBP, hasta 3 MB. Si no seleccionás otra imagen, se conserva la actual.</p>
<button class="btn-comprar" type="submit">Guardar producto</button> <a href="index.php">Cancelar</a>
</form>
