<?php
$base = $base ?? '';
$actual = $actual ?? basename($_SERVER['SCRIPT_NAME'] ?? 'index.php');
$links = [
    'index.php'=>'Inicio', 'indumentaria.php'=>'Indumentaria', 'uniformes.php'=>'Uniformes',
    'accesorios.php'=>'Accesorios', 'cursos.php'=>'Cursos', 'nosotros.php'=>'Nosotros',
    'curriculum.php'=>'Instructor', 'preguntas.php'=>'FAQs', 'productos.php'=>'Buscar productos',
    'crear-cuenta.php'=>'Crear cuenta'
];
$seccion = ['shorts.php'=>'indumentaria.php','remeras.php'=>'indumentaria.php','guantes.php'=>'indumentaria.php',
'itf.php'=>'uniformes.php','wtf.php'=>'uniformes.php','mano.php'=>'accesorios.php','pies.php'=>'accesorios.php'];
$activo = $seccion[$actual] ?? $actual;
require_once __DIR__ . '/../config/auth.php';
$usuario_actual = current_user($pdo);
if ($usuario_actual && $usuario_actual['rol']==='administrador') $links['admin/index.php']='Administrar';
if (!$usuario_actual) $links['login.php']='Ingresar';
?>
<nav role="navigation" aria-label="Navegación principal">
<?php foreach ($links as $url => $etiqueta): ?>
    <a href="<?= e($base . $url) ?>" class="<?= $activo === $url ? 'active' : '' ?>" <?= $activo === $url ? 'aria-current="page"' : '' ?>><?= e($etiqueta) ?></a>
<?php endforeach; ?>
<?php if ($usuario_actual): ?>
<span style="padding:10px;color:white"><?=e($usuario_actual['nombre'])?> (<?=e($usuario_actual['rol'])?>)</span>
<form method="post" action="<?=e($base)?>logout.php" style="display:inline"><input type="hidden" name="csrf" value="<?=e(csrf_token())?>"><button type="submit">Salir</button></form>
<?php endif; ?>
</nav>
