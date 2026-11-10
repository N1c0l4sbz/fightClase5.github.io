<?php
require_once __DIR__ . '/logica.php';
require_once __DIR__ . '/../config/auth.php';
require_admin($pdo);$titulo_pagina='Crear producto - Impact Fight';$base='../';
$producto=['id'=>null,'nombre'=>'','descripcion'=>'','categoria_id'=>1,'precio'=>'0.00','stock'=>0,'imagen'=>''];$errores=[];
if ($_SERVER['REQUEST_METHOD']==='POST') {
    [$producto,$errores]=validar_producto($pdo);
    require_once __DIR__.'/subir-imagen.php';
    procesar_imagen_subida($producto,$errores);
    if (!$errores) {
        $s=$pdo->prepare('INSERT INTO productos (nombre,descripcion,categoria_id,precio,stock,imagen) VALUES (:n,:d,:c,:p,:s,:i)');
        $s->execute([':n'=>$producto['nombre'],':d'=>$producto['descripcion'],':c'=>$producto['categoria_id'],':p'=>$producto['precio'],':s'=>$producto['stock'],':i'=>$producto['imagen']?:null]);
        header('Location: index.php?ok=created');exit;
    }
}
$categorias=categorias($pdo);$accion='crear.php';require __DIR__ . '/../includes/header.php'; ?>
<header role="banner"><h1>Nuevo producto</h1></header><?php require __DIR__ . '/../includes/nav.php'; ?>
<main class="container"><div class="card"><?php foreach ($errores as $error): ?><p class="alerta-error"><?= e($error) ?></p><?php endforeach; ?><?php require __DIR__ . '/formulario.php'; ?></div></main>
<?php require __DIR__ . '/../includes/footer.php'; ?>
