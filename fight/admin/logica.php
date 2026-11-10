<?php
require_once __DIR__ . '/../config/conexion.php';
function categorias(PDO $pdo): array { $s=$pdo->prepare('SELECT id,nombre FROM categorias ORDER BY nombre');$s->execute();return $s->fetchAll(); }
function validar_producto(PDO $pdo): array {
    check_csrf();
    $p=['nombre'=>input_text($_POST['nombre'] ?? '',160),'descripcion'=>input_text($_POST['descripcion'] ?? '',5000),
        'categoria_id'=>filter_var($_POST['categoria_id'] ?? null,FILTER_VALIDATE_INT) ?: 0,
        'precio'=>$_POST['precio'] ?? '', 'stock'=>$_POST['stock'] ?? '', 'imagen'=>input_text($_POST['imagen'] ?? '',255)];
    $errores=[];
    if ($p['nombre']==='' || $p['descripcion']==='') $errores[]='Completá el nombre y la descripción.';
    $s=$pdo->prepare('SELECT COUNT(*) FROM categorias WHERE id=:id');$s->execute([':id'=>$p['categoria_id']]);
    if (!(int)$s->fetchColumn()) $errores[]='Elegí una categoría válida.';
    if (!is_scalar($p['precio']) || !is_numeric($p['precio']) || !is_finite((float)$p['precio']) || (float)$p['precio']<0 || (float)$p['precio']>9999999999) $errores[]='Precio inválido.';
    $stock=filter_var($p['stock'],FILTER_VALIDATE_INT);
    if ($stock===false || $stock<0) $errores[]='Stock inválido.';
    if ($p['imagen']!=='' && (!preg_match('~^img/[a-zA-Z0-9 _.-]+\.(webp|png|jpg|jpeg)$~i',$p['imagen']) || str_contains($p['imagen'],'..'))) $errores[]='La imagen debe ser una ruta local dentro de img/.';
    return [$p,$errores];
}
