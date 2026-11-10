<?php
require_once __DIR__ . '/helpers.php';
$dsn = 'mysql:host=' . setting('DB_HOST', '127.0.0.1') . ';port=' . setting('DB_PORT', '3306') . ';dbname=' . setting('DB_NAME', 'lunar_mca') . ';charset=utf8mb4';
try {
    $pdo = new PDO($dsn, setting('DB_USER', 'root'), setting('DB_PASS', ''), [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);
} catch (PDOException $ex) {
    error_log('Error PDO: ' . $ex->getMessage());
    http_response_code(503);
    exit('No se pudo conectar a la base de datos. Revisá .env e importá tp6/schema.sql.');
}
