<?php
$titulo_pagina='Buscar productos - Impact Fight'; $base='';
require_once __DIR__ . '/config/conexion.php';
$busqueda=input_text($_GET['q'] ?? '', 100);
$categoria=filter_var($_GET['categoria'] ?? 0, FILTER_VALIDATE_INT) ?: 0;
$categorias=$pdo->prepare('SELECT id,nombre FROM categorias ORDER BY nombre'); $categorias->execute();
$sql='SELECT p.*,c.nombre AS categoria FROM productos p JOIN categorias c ON c.id=p.categoria_id WHERE 1=1'; $params=[];
if ($busqueda !== '') { $sql.=' AND (p.nombre LIKE :q OR p.descripcion LIKE :q2)'; $params[':q']='%'.$busqueda.'%';$params[':q2']='%'.$busqueda.'%'; }
if ($categoria > 0) { $sql.=' AND p.categoria_id=:categoria';$params[':categoria']=$categoria; }
$sql.=' ORDER BY p.nombre ASC'; $stmt=$pdo->prepare($sql);$stmt->execute($params);$productos=$stmt->fetchAll();
require __DIR__ . '/includes/header.php';
?>
<header role="banner"><h1>Catálogo de productos</h1><p>Equipamiento y formación marcial</p></header>
<?php require __DIR__ . '/includes/nav.php'; ?>
<main class="container"><div class="card"><h2>Buscar y filtrar (GET)</h2>
<form method="GET" action="productos.php" class="filtros">
<label>Producto <input name="q" value="<?= e($busqueda) ?>" placeholder="Buscar producto"></label>
<label>Categoría <select name="categoria"><option value="0">Todas</option><?php foreach ($categorias as $c): ?><option value="<?= (int)$c['id'] ?>" <?= $categoria===(int)$c['id']?'selected':'' ?>><?= e($c['nombre']) ?></option><?php endforeach; ?></select></label>
<button class="btn-comprar" type="submit">Buscar</button></form>
<p><?= count($productos) ?> resultado(s)</p></div>
<div class="catalogo-grid"><?php foreach ($productos as $p): ?><article class="card">
<?php if ($p['imagen']): ?><img class="producto-foto" src="<?= e($p['imagen']) ?>" alt="<?= e($p['nombre']) ?>"><?php endif; ?>
<h2><?= e($p['nombre']) ?></h2><p><?= e($p['descripcion']) ?></p><p>Categoría: <?= e($p['categoria']) ?></p><strong>$<?= e(number_format((float)$p['precio'],2,',','.')) ?></strong><p>Stock: <?= (int)$p['stock'] ?></p></article><?php endforeach; ?></div>
</main><?php require __DIR__ . '/includes/footer.php'; ?>
