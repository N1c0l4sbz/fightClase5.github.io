<?php
// Lee variables de un .env local sencillo, sin dependencias externas.
$envFile = dirname(__DIR__) . '/.env';
if (is_file($envFile)) {
    foreach (file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
        $line = trim($line);
        if ($line === '' || str_starts_with($line, '#') || !str_contains($line, '=')) continue;
        [$key, $value] = explode('=', $line, 2);
        $key = trim($key);
        if (preg_match('/^[A-Z][A-Z0-9_]*$/', $key) && getenv($key) === false) {
            putenv($key . '=' . trim($value, " \t\n\r\0\x0B\"'"));
        }
    }
}
function setting(string $key, string $default = ''): string {
    $value = getenv($key);
    return $value === false ? $default : $value;
}
define('APP_NAME', setting('APP_NAME', 'Impact Fight'));
define('APP_EMAIL', setting('APP_EMAIL', 'soporte@ejemplo.com'));
define('APP_ENV', setting('APP_ENV', 'local'));
