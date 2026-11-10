<?php
require_once __DIR__.'/../config/auth.php';$yo=require_admin($pdo);
$errores=[];$exito='';
if ($_SERVER['REQUEST_METHOD']==='POST') {
 check_csrf();$id=filter_var($_POST['id']??null,FILTER_VALIDATE_INT);$rol=$_POST['rol']??'';
 if (!$id || !in_array($rol,['administrador','cliente'],true)) $errores[]='Datos inválidos.';
 elseif ((int)$id===(int)$yo['id']) $errores[]='No podés cambiar tu propio rol.';
 else {
  try {
   $pdo->beginTransaction();
   $s=$pdo->prepare('SELECT rol_id FROM usuarios WHERE id=:id FOR UPDATE');$s->execute([':id'=>$id]);$actual=$s->fetchColumn();
   $r=$pdo->prepare('SELECT id FROM roles WHERE nombre=:n');$r->execute([':n'=>$rol]);$rol_id=$r->fetchColumn();
   if (!$actual || !$rol_id) throw new RuntimeException('Usuario o rol inexistente.');
   $s=$pdo->prepare('UPDATE usuarios SET rol_id=:rol WHERE id=:id');$s->execute([':rol'=>$rol_id,':id'=>$id]);
   $pdo->commit();$exito='Rol actualizado.';
  } catch(Throwable $e) {if($pdo->inTransaction())$pdo->rollBack();$errores[]='No se pudo actualizar el rol.';}
 }
}
$s=$pdo->prepare('SELECT u.id,u.nombre,u.email,r.nombre AS rol FROM usuarios u INNER JOIN roles r ON r.id=u.rol_id ORDER BY u.id');$s->execute();$usuarios=$s->fetchAll();
$titulo_pagina='Roles - Impact Fight';$base='../';require __DIR__.'/../includes/header.php';?>
<header><h1>Roles y permisos</h1></header><?php require __DIR__.'/../includes/nav.php';?>
<main class="container"><div class="card"><p>Solo los administradores pueden acceder a este apartado y al CRUD de productos. Las cuentas nuevas se registran como clientes.</p>
<?php foreach($errores as $error):?><p class="alerta-error"><?=e($error)?></p><?php endforeach;?>
<?php if($exito):?><p class="alerta-exito"><?=e($exito)?></p><?php endif;?>
<div class="tabla-scroll"><table class="tabla-crud"><thead><tr><th>Nombre</th><th>Correo</th><th>Rol</th><th>Cambiar rol</th></tr></thead><tbody>
<?php foreach($usuarios as $u):?><tr><td><?=e($u['nombre'])?></td><td><?=e($u['email'])?></td><td><?=e($u['rol'])?></td><td>
<?php if((int)$u['id']===(int)$yo['id']):?>Tu cuenta (protegida)
<?php else:?><form method="post"><input type="hidden" name="csrf" value="<?=e(csrf_token())?>"><input type="hidden" name="id" value="<?=(int)$u['id']?>"><select name="rol"><option value="cliente" <?=$u['rol']==='cliente'?'selected':''?>>Cliente</option><option value="administrador" <?=$u['rol']==='administrador'?'selected':''?>>Administrador</option></select><button type="submit">Guardar rol</button></form><?php endif;?></td></tr><?php endforeach;?></tbody></table></div>
<p><a href="index.php">Volver al panel</a></p></div></main><?php require __DIR__.'/../includes/footer.php';?>
