<?php
require_once __DIR__.'/config/helpers.php';
if ($_SERVER['REQUEST_METHOD']!=='POST') {http_response_code(405);exit('Método no permitido');}
check_csrf();$_SESSION=[];session_regenerate_id(true);header('Location: login.php');exit;
