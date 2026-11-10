<?php
require_once __DIR__ . '/../config/auth.php';
require_admin($pdo);
if ($_SERVER['REQUEST_METHOD']!=='POST') {http_response_code(405);header('Allow: POST');exit('Método no permitido');}
check_csrf();$id=filter_var($_POST['id']??null,FILTER_VALIDATE_INT);
if (!$id) {http_response_code(400);exit('ID inválido');}
try { $s=$pdo->prepare('DELETE FROM productos WHERE id=:id');$s->execute([':id'=>$id]); }
catch (PDOException $ex) { error_log($ex->getMessage());http_response_code(409);exit('No se puede borrar un producto asociado a pedidos.'); }
header('Location: index.php?ok=deleted');exit;
