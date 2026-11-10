<?php require_once __DIR__ . '/../config/helpers.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= e($titulo_pagina ?? APP_NAME) ?></title>
    <link rel="stylesheet" href="<?= e($base ?? '') ?>estilos.css">
</head>
<body>
