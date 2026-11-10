<?php $titulo_pagina = "Impact Fight - Inicio"; $base = ''; require_once __DIR__ . '/includes/header.php'; ?>
<header role="banner">
        <h1>Impact Fight</h1>
        <p>Plataforma Oficial de Equipamiento y Formación Marcial</p>
    </header>
<?php require __DIR__ . '/includes/nav.php'; ?>


    <div class="barra-herramientas">
        <div id="reloj-tiempo-real" class="reloj-texto">Cargando fecha y hora...</div>
        <button onclick="alternarTema()" class="btn-tema">🌗 Cambiar Modo</button>
        <!-- BOTONES DE ACCESIBILIDAD DE VOZ -->
        <button onclick="leerPagina()" class="btn-tema" aria-label="Leer página en voz alta">🔊 Leer en Voz Alta</button>
        <button onclick="detenerVoz()" class="btn-tema" aria-label="Detener lectura">⏹️ Detener Voz</button>
    </div>

    <main class="container" role="main">

        <div class="card">
            <h2 style="color: #d32f2f;">¡Bienvenidos a Impact Fight!</h2>
            <p>
                Ofrecemos equipamiento homologado y de máxima calidad para practicantes de Taekwondo ITF. Garantizamos seguridad, resistencia y el mejor rendimiento para tus entrenamientos y torneos.
            </p>
        </div>

        <div class="card" style="text-align: center;">
            <h2>Galería Destacada (Interactiva)</h2>
            <p style="color: #aaa; margin-bottom: 15px;">Usa los botones para cambiar de imagen o haz clic sobre la foto para ampliarla.</p>

            <div style="display: inline-block;">
                <img id="imagen-carrusel" src="img/protectores de pie azules.webp" alt="Producto Destacado" onclick="ampliarImagen(this.src)" style="max-width: 280px; height: 220px; object-fit: contain; cursor: pointer; border-radius: 8px; background: #fff; padding: 10px;">
            </div>

            <div style="margin-top: 15px;">
                <button onclick="cambiarImagenCarrusel(-1)" class="btn-comprar" style="width: auto; margin-right: 10px;">◀ Anterior</button>
                <button onclick="cambiarImagenCarrusel(1)" class="btn-comprar" style="width: auto;">Siguiente ▶</button>
            </div>
        </div>

        <div class="card">
            <h2>Información Frecuente</h2>
            <button onclick="toggleAcordeon('info-desplegable')" class="btn-comprar" style="width: 100%; margin-top: 10px;">
                📌 Haz clic para Mostrar / Ocultar Medios de Pago y Envíos
            </button>
            <div id="info-desplegable" class="acordeon-contenido">
                <p>✔ Realizamos envíos a toda la provincia de Salta y resto del país.</p>
                <p>✔ Aceptamos efectivo, transferencias bancarias y tarjetas en cuotas.</p>
                <p>✔ Descuentos especiales para escuelas y compras al por mayor.</p>
            </div>
        </div>

        <div class="card">
            <h2>Formulario de Consultas</h2>
            <?php
$contacto = ['nombre'=>'','email'=>'']; $errores = []; $exito = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    check_csrf();
    $contacto['nombre'] = input_text($_POST['nombre'] ?? '', 120);
    $contacto['email'] = input_text($_POST['email'] ?? '', 190);
    if ($contacto['nombre'] === '') $errores[] = 'Ingresá tu nombre.';
    if (!filter_var($contacto['email'], FILTER_VALIDATE_EMAIL)) $errores[] = 'Ingresá un correo válido.';
    if (!$errores) {
        require_once __DIR__ . '/config/conexion.php';
        $pdo->prepare('INSERT INTO consultas (nombre, contacto, mensaje) VALUES (:n, :c, :m)')->execute([':n'=>$contacto['nombre'],':c'=>$contacto['email'],':m'=>'Consulta desde inicio']);
        $exito = 'Consulta recibida correctamente.'; $contacto=['nombre'=>'','email'=>''];
    }
}
?>
<?php if ($exito): ?><p class="alerta-exito"><?= e($exito) ?></p><?php endif; ?>
<?php foreach ($errores as $error): ?><p class="alerta-error"><?= e($error) ?></p><?php endforeach; ?>
<form id="formulario-contacto" method="POST" action="index.php" style="margin-top: 15px;">
                
                <div class="form-group">
                    <label for="nombre">Nombre Completo:</label>
                    <input type="text" id="nombre" name="nombre" required value="<?= e($contacto['nombre']) ?>" placeholder="Ingresa tu nombre">
                    <small id="error-nombre" class="error-msg"></small>
                </div>

                <div class="form-group">
                    <label for="email">Correo Electrónico:</label>
                    <input type="text" id="email" name="email" required value="<?= e($contacto['email']) ?>" placeholder="usuario@email.com">
                    <small id="error-email" class="error-msg"></small>
                </div>

                <input type="hidden" name="csrf" value="<?= e(csrf_token()) ?>"><button type="submit" class="btn-comprar" style="width: 100%;">Enviar Consulta</button>
            </form>

            <div id="resumen-formulario" class="resumen-box"></div>
        </div>

    </main>

    <div id="modal-imagen" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.85); justify-content:center; align-items:center; z-index:1000;" onclick="cerrarModal()">
        <img id="img-ampliada" src="" alt="Imagen Ampliada" style="max-width:80%; max-height:80%; border-radius:8px;">
    </div>

    
<?php require __DIR__ . '/includes/footer.php'; ?>
