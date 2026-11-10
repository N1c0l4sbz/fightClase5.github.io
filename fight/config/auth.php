<?php
require_once __DIR__ . '/conexion.php';
function current_user(PDO $pdo): ?array {
    $id = filter_var($_SESSION['usuario_id'] ?? null, FILTER_VALIDATE_INT);
    if (!$id) return null;
    $s=$pdo->prepare('SELECT u.id,u.nombre,u.email,r.nombre AS rol FROM usuarios u INNER JOIN roles r ON r.id=u.rol_id WHERE u.id=:id');
    $s->execute([':id'=>$id]);return $s->fetch() ?: null;
}
function require_admin(PDO $pdo): array {
    $u=current_user($pdo);
    if (!$u) { header('Location: ../login.php');exit; }
    if ($u['rol']!=='administrador') {http_response_code(403);exit('Acceso denegado: se requiere rol administrador.');}
    return $u;
}
