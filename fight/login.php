<?php
require_once __DIR__.'/config/auth.php';
if (current_user($pdo)) {header('Location: index.php');exit;}
$error='';$email='';
if ($_SERVER['REQUEST_METHOD']==='POST') {
 check_csrf();$email=input_text($_POST['email']??'',190);$pass=$_POST['password']??'';
 $s=$pdo->prepare('SELECT id,password FROM usuarios WHERE email=:email');$s->execute([':email'=>$email]);$u=$s->fetch();
 if ($u && is_string($pass) && password_verify($pass,$u['password'])) {session_regenerate_id(true);$_SESSION['usuario_id']=(int)$u['id'];header('Location: index.php');exit;}
 $error='Correo o contraseña incorrectos.';
}
$titulo_pagina='Ingresar - Impact Fight';$base='';require __DIR__.'/includes/header.php';?>
<header><h1>Iniciar sesión</h1></header><?php require __DIR__.'/includes/nav.php';?>
<main class="container"><div class="card" style="max-width:520px;margin:auto"><h2>Acceso a tu cuenta</h2>
<?php if($error):?><p class="alerta-error"><?=e($error)?></p><?php endif;?>
<form method="post" class="form-admin"><input type="hidden" name="csrf" value="<?=e(csrf_token())?>">
<label>Correo <input type="email" name="email" required value="<?=e($email)?>"></label>
<label>Contraseña <input type="password" name="password" required></label><button class="btn-comprar">Ingresar</button></form>
<p>¿No tenés cuenta? <a href="crear-cuenta.php">Registrate</a>.</p></div></main><?php require __DIR__.'/includes/footer.php';?>
