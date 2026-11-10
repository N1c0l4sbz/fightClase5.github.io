<?php $titulo_pagina = "Crear Cuenta - Impact Fight"; $base = ''; require_once __DIR__ . '/includes/header.php'; ?>
<header role="banner">
        <div class="header-content">
            <h1>Registro de Usuario</h1>
            <p>Sumate a la comunidad de Impact Fight</p>
        </div>
    </header>
<?php require __DIR__ . '/includes/nav.php'; ?>


    <!-- Contenido Principal envuelto en DIVs -->
    <main class="container" role="main">

        <!-- Formulario de Registro -->
        <div class="card" style="max-width: 500px; margin: 0 auto;">
            <h2 style="text-align: center;">Crear Cuenta</h2>
            
            <?php
$registro=['nombre'=>'','email'=>'','telefono'=>'']; $errores=[]; $exito='';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    check_csrf();
    foreach ($registro as $campo => $v) $registro[$campo] = input_text($_POST[$campo] ?? '', 190);
    $clave = is_string($_POST['password'] ?? null) ? $_POST['password'] : '';
    if ($registro['nombre'] === '' || $registro['telefono'] === '') $errores[] = 'Completá nombre y teléfono.';
    if (!filter_var($registro['email'], FILTER_VALIDATE_EMAIL)) $errores[] = 'Correo inválido.';
    if (strlen($clave) < 8) $errores[] = 'La contraseña debe tener al menos 8 caracteres.';
    if (!$errores) {
        require_once __DIR__ . '/config/conexion.php';
        try {
            $pdo->prepare('INSERT INTO usuarios (rol_id,nombre,email,telefono,password) VALUES (2,:n,:e,:t,:p)')->execute([':n'=>$registro['nombre'],':e'=>$registro['email'],':t'=>$registro['telefono'],':p'=>password_hash($clave,PASSWORD_DEFAULT)]);
            $exito='Cuenta creada correctamente.'; $registro=['nombre'=>'','email'=>'','telefono'=>''];
        } catch (PDOException $ex) { if ($ex->getCode()==='23000') $errores[]='Ya existe una cuenta con ese correo.'; else { error_log($ex->getMessage()); $errores[]='No se pudo registrar la cuenta.'; } }
    }
}
?>
<?php if ($exito): ?><p class="alerta-exito"><?= e($exito) ?></p><?php endif; ?>
<?php foreach ($errores as $error): ?><p class="alerta-error"><?= e($error) ?></p><?php endforeach; ?>
<form action="crear-cuenta.php" method="POST" style="display: flex; flex-direction: column; gap: 15px; margin-top: 20px;">
                
                <div>
                    <label for="nombre" style="font-weight: bold; display: block; margin-bottom: 5px;">Nombre Completo:</label>
                    <input type="text" id="nombre" name="nombre" value="<?= e($registro['nombre']) ?>" placeholder="Tu nombre y apellido" required 
                           style="width: 100%; padding: 12px; border: 2px solid #ccc; border-radius: 5px; box-sizing: border-box;">
                </div>

                <div>
                    <label for="email" style="font-weight: bold; display: block; margin-bottom: 5px;">Correo Electrónico:</label>
                    <input type="email" id="email" name="email" value="<?= e($registro['email']) ?>" placeholder="ejemplo@correo.com" required 
                           style="width: 100%; padding: 12px; border: 2px solid #ccc; border-radius: 5px; box-sizing: border-box;">
                </div>

                <div>
                    <label for="telefono" style="font-weight: bold; display: block; margin-bottom: 5px;">Teléfono de Contacto:</label>
                    <input type="tel" id="telefono" name="telefono" value="<?= e($registro['telefono']) ?>" placeholder="Ej: 3871234567" required 
                           style="width: 100%; padding: 12px; border: 2px solid #ccc; border-radius: 5px; box-sizing: border-box;">
                </div>

                <div>
                    <label for="password" style="font-weight: bold; display: block; margin-bottom: 5px;">Contraseña:</label>
                    <input type="password" id="password" name="password" placeholder="Crea tu contraseña" required 
                           style="width: 100%; padding: 12px; border: 2px solid #ccc; border-radius: 5px; box-sizing: border-box;">
                </div>

                <input type="hidden" name="csrf" value="<?= e(csrf_token()) ?>"><button type="submit" class="btn-comprar" style="padding: 12px; font-weight: bold; border: none; cursor: pointer; margin-top: 10px;">
                    REGISTRARME
                </button>

            </form>

            <div style="text-align: center; margin-top: 20px;">
                <a href="index.php" style="color: #0056b3; font-weight: bold; text-decoration: underline;">
                    Ir al inicio
                </a>
            </div>
        </div>

        <!-- Botón para regresar al menú -->
        <div class="card" style="text-align: center; margin-top: 20px;">
            <h3>¿Terminaste de mirar?</h3>
            <a href="index.php" class="btn-comprar" style="display:inline-block; width:auto; padding:10px 25px; text-decoration:none;">VOLVER AL MENÚ</a>
        </div>

    </main>

    <!-- Pie de página -->
    
<?php require __DIR__ . '/includes/footer.php'; ?>
