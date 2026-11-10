<?php
// Solo por consola: php admin/setup-admin.php
if (PHP_SAPI !== 'cli') {http_response_code(404);exit('No disponible por navegador');}
require_once __DIR__.'/../config/conexion.php';
function ask(string $prompt): string {echo $prompt;return trim((string)fgets(STDIN));}
$email=ask('Email del administrador: ');$nombre=ask('Nombre: ');$pass=ask('Contraseña (mínimo 12 caracteres): ');
if (!filter_var($email,FILTER_VALIDATE_EMAIL)||$nombre===''||strlen($pass)<12) {fwrite(STDERR,"Datos inválidos.
");exit(1);}
$s=$pdo->prepare('SELECT id FROM roles WHERE nombre=:rol');$s->execute([':rol'=>'administrador']);$rol=$s->fetchColumn();
if (!$rol) {fwrite(STDERR,"Importá primero tp6/schema.sql.
");exit(1);}
$s=$pdo->prepare('INSERT INTO usuarios (rol_id,nombre,email,password) VALUES (:r,:n,:e,:p)');
try {$s->execute([':r'=>$rol,':n'=>$nombre,':e'=>$email,':p'=>password_hash($pass,PASSWORD_DEFAULT)]);echo "Administrador creado. Ingresá desde login.php.
";}
catch(PDOException $e) {fwrite(STDERR,"No se pudo crear (¿email ya registrado?).
");exit(1);}
