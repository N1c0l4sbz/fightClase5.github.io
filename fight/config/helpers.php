<?php
require_once __DIR__ . '/env.php';
if (session_status() !== PHP_SESSION_ACTIVE) session_start();
function e(mixed $value): string { return htmlspecialchars((string)$value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); }
function input_text(mixed $value, int $limit = 255): string {
    if (!is_string($value)) return '';
    return mb_substr(trim($value), 0, $limit, 'UTF-8');
}
function csrf_token(): string {
    if (session_status() !== PHP_SESSION_ACTIVE) session_start();
    if (!isset($_SESSION['csrf'])) $_SESSION['csrf'] = bin2hex(random_bytes(32));
    return $_SESSION['csrf'];
}
function check_csrf(): void {
    if (session_status() !== PHP_SESSION_ACTIVE) session_start();
    if (!hash_equals($_SESSION['csrf'] ?? '', (string)($_POST['csrf'] ?? ''))) {
        http_response_code(403); exit('Solicitud no válida. Recargá la página e intentá de nuevo.');
    }
}
