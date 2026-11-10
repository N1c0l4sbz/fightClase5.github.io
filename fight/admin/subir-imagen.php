<?php
function procesar_imagen_subida(array &$producto, array &$errores): void {
    $f=$_FILES['imagen_archivo']??null;
    if (!$f || $f['error']===UPLOAD_ERR_NO_FILE) return;
    if ($f['error']!==UPLOAD_ERR_OK || !is_uploaded_file($f['tmp_name'])) {$errores[]='No se pudo subir la imagen.';return;}
    if ($f['size']>3*1024*1024 || $f['size']<=0) {$errores[]='La imagen debe pesar menos de 3 MB.';return;}
    $mime=(new finfo(FILEINFO_MIME_TYPE))->file($f['tmp_name']);
    $tipos=['image/jpeg'=>'jpg','image/png'=>'png','image/webp'=>'webp'];
    if (!isset($tipos[$mime]) || @getimagesize($f['tmp_name'])===false) {$errores[]='Solo se permiten imágenes JPG, PNG o WEBP.';return;}
    if ($errores) return;
    $nombre=bin2hex(random_bytes(16)).'.'.$tipos[$mime];
    $destino=__DIR__.'/../img/'.$nombre;
    if (!move_uploaded_file($f['tmp_name'],$destino)) {$errores[]='No se pudo guardar la imagen.';return;}
    $producto['imagen']='img/'.$nombre;
}
