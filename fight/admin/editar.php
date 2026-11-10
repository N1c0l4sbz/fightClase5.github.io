<?php
require_once __DIR__ . '/logica.php';
require_once __DIR__ . '/../config/auth.php';
require_admin($pdo);$titulo_pagina='Editar producto - Impact Fight';$base='../';
$id=filter_var($_SERVER['REQUEST_METHOD']==='POST'?($_POST['id']??null):($_GET['id']??null),FILTER_VALIDATE_INT);
if (!$id) {http_response_code(400);exit('ID inválido');}
$s=$pdo->prepare('SELECT * FROM productos WHERE id=:id');$s->execute([':id'=>$id]);$producto=$s->fetch();
if (!$producto) {http_response_code(404);exit('Producto no encontrado');}
$errores=[];
if ($_SERVER['REQUEST_METHOD']==='POST') {
    [$entrada,$errores]=validar_producto($pdo);$producto=array_merge($producto,$entrada);
    require_once __DIR__.'/subir-imagen.php';
    procesar_imagen_subida($producto,$errores);
    if (!$errores) {
        $s=$pdo->prepare('UPDATE productos SET nombre=:n,descripcion=:d,categoria_id=:c,precio=:p,stock=:s,imagen=:i WHERE id=:id');
        $s->execute([':n'=>$producto['nombre'],':d'=>$producto['descripcion'],':c'=>$producto['categoria_id'],':p'=>$producto['precio'],':s'=>$producto['stock'],':i'=>$producto['imagen']?:null,':id'=>$id]);
        header('Location: index.php?ok=updated');exit;
    }
}
$categorias=categorias($pdo);$accion='editar.php';require __DIR__ . '/../includes/header.php'; ?>
<header role="banner"><h1>Editar producto</h1></header><?php require __DIR__ . '/../includes/nav.php'; ?>
<main class="container"><div class="card"><?php foreach ($errores as $error): ?><p class="alerta-error"><?= e($error) ?></p><?php endforeach; ?><?php require __DIR__ . '/formulario.php'; ?></div></main>
<?php require __DIR__ . '/../includes/footer.php'; ?>
