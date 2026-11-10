<?php $titulo_pagina = "Preguntas Frecuentes - Impact Fight"; $base = ''; require_once __DIR__ . '/includes/header.php'; ?>
<header role="banner">
        <div class="header-content">
            <h1>Preguntas Frecuentes</h1>
            <p>Resuelve tus dudas sobre nuestros productos, envíos y medios de pago</p>
        </div>
    </header>
<?php require __DIR__ . '/includes/nav.php'; ?>


    <!-- Contenido Principal -->
    <main class="container" role="main">

        <!-- Lista de Preguntas Frecuentes -->
        <div class="card">
            <h2>¿Cómo realizar tu compra?</h2>
            <p>Puedes seleccionar los productos desde nuestro catálogo y contactarnos directamente para coordinar el talle y la entrega.</p>
        </div>

        <div class="card">
            <h2>¿Cuáles son las formas de pago?</h2>
            <p>Aceptamos transferencias bancarias, efectivo y pagos mediante Mercado Pago.</p>
        </div>

        <div class="card">
            <h2>¿Hacen envíos a todo el país?</h2>
            <p>Sí, realizamos envíos a través de correo y encomiendas. En Salta Capital coordinamos puntos de encuentro o entregas directas.</p>
        </div>

        <!-- Sección del Formulario de Preguntas Directas -->
        <div class="card" style="margin-top: 30px;">
            <h2 style="text-align: center; color: #d32f2f;">¿Tienes otra duda más?</h2>
            <p style="text-align: center; margin-bottom: 20px;">Escríbela aquí abajo y te responderemos a la brevedad:</p>

            <?php
$valores = ['nombre'=>'','contacto'=>'','mensaje'=>'']; $errores = []; $exito = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    check_csrf();
    foreach ($valores as $campo => $v) $valores[$campo] = input_text($_POST[$campo] ?? '', $campo === 'mensaje' ? 2000 : 190);
    if (in_array('', $valores, true)) $errores[] = 'Completá todos los campos.';
    if (!$errores) {
        require_once __DIR__ . '/config/conexion.php';
        $pdo->prepare('INSERT INTO consultas (nombre, contacto, mensaje) VALUES (:n,:c,:m)')->execute([':n'=>$valores['nombre'],':c'=>$valores['contacto'],':m'=>$valores['mensaje']]);
        $exito = 'Tu pregunta se guardó correctamente.'; $valores = ['nombre'=>'','contacto'=>'','mensaje'=>''];
    }
}
?>
<?php if ($exito): ?><p class="alerta-exito"><?= e($exito) ?></p><?php endif; ?>
<?php foreach ($errores as $error): ?><p class="alerta-error"><?= e($error) ?></p><?php endforeach; ?>
<form class="form-contacto" action="preguntas.php" method="POST"><input type="hidden" name="csrf" value="<?= e(csrf_token()) ?>">
                <div style="margin-bottom: 15px;">
                    <label for="nombre" style="display: block; font-weight: bold; margin-bottom: 5px;">Tu Nombre:</label>
                    <input type="text" id="nombre" name="nombre" value="<?= e($valores['nombre']) ?>" placeholder="Ingresa tu nombre" required style="width: 100%; padding: 10px; border-radius: 6px; border: 1px solid #333; background-color: #222; color: #fff;">
                </div>

                <div style="margin-bottom: 15px;">
                    <label for="email" style="display: block; font-weight: bold; margin-bottom: 5px;">Tu Correo o Teléfono:</label>
                    <input type="text" id="email" name="contacto" value="<?= e($valores['contacto']) ?>" placeholder="Ej: usuario@email.com o Celular" required style="width: 100%; padding: 10px; border-radius: 6px; border: 1px solid #333; background-color: #222; color: #fff;">
                </div>

                <div style="margin-bottom: 15px;">
                    <label for="mensaje" style="display: block; font-weight: bold; margin-bottom: 5px;">Tu Consulta o Pregunta:</label>
                    <textarea id="mensaje" name="mensaje" rows="4" placeholder="Escribe tu consulta aquí..." required style="width: 100%; padding: 10px; border-radius: 6px; border: 1px solid #333; background-color: #222; color: #fff; resize: vertical;"><?= e($valores['mensaje']) ?></textarea>
                </div>

                <button type="submit" class="btn-comprar" style="width: 100%; border: none; cursor: pointer; font-size: 1rem;">Enviar Pregunta</button>
            </form>
        </div>

        <!-- Botón para regresar -->
        <div class="card" style="text-align: center;">
            <h3>¿Terminaste de consultar?</h3>
            <a href="index.php" class="btn-comprar" style="display:inline-block; width:auto; padding:10px 25px; text-decoration:none;">VOLVER AL MENÚ</a>
        </div>

    </main>

    <!-- Pie de página -->
    
<?php require __DIR__ . '/includes/footer.php'; ?>
