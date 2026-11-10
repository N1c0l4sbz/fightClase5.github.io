<?php
$titulo_pagina='Administrar productos - Impact Fight';$base='../';
require_once __DIR__ . '/../config/auth.php';
require_admin($pdo);
$stmt=$pdo->prepare('SELECT p.*,c.nombre AS categoria FROM productos p INNER JOIN categorias c ON c.id=p.categoria_id ORDER BY p.id DESC');$stmt->execute();$productos=$stmt->fetchAll();
require __DIR__ . '/../includes/header.php'; ?>
<header role="banner"><h1>Administración de productos</h1><p>Panel local para el TP7</p></header>
<?php require __DIR__ . '/../includes/nav.php'; ?>
<main class="container"><div class="card"><h2>Productos registrados</h2><p>Acceso exclusivo para administradores. <a href="roles.php">Administrar roles de usuarios</a></p>
<a class="btn-comprar" href="crear.php">Agregar producto</a>
<?php if (isset($_GET['ok'])): ?><p class="alerta-exito">Operación realizada correctamente.</p><?php endif; ?>
<div class="tabla-scroll"><table class="tabla-crud"><thead><tr><th>ID</th><th>Producto</th><th>Categoría</th><th>Precio</th><th>Stock</th><th>Acciones</th></tr></thead><tbody>
<?php foreach ($productos as $p): ?><tr><td><?= (int)$p['id'] ?></td><td><?= e($p['nombre']) ?></td><td><?= e($p['categoria']) ?></td><td>$<?= e($p['precio']) ?></td><td><?= (int)$p['stock'] ?></td><td><a href="editar.php?id=<?= (int)$p['id'] ?>">Editar</a>
<form action="eliminar.php" method="POST" class="inline-form" onsubmit="return confirm('¿Eliminar este producto?')"><input type="hidden" name="id" value="<?= (int)$p['id'] ?>"><input type="hidden" name="csrf" value="<?= e(csrf_token()) ?>"><button type="submit">Eliminar</button></form></td></tr><?php endforeach; ?></tbody></table></div></div></main>
<?php require __DIR__ . '/../includes/footer.php'; ?>
