<?php $titulo_pagina = "Acerca de Nosotros - Impact Fight"; $base = ''; require_once __DIR__ . '/includes/header.php'; ?>
<header role="banner">
        <div class="header-content">
            <h1>Acerca de Nosotros</h1>
            <p>Pasión, disciplina y formación marcial de excelencia</p>
        </div>
    </header>
<?php require __DIR__ . '/includes/nav.php'; ?>


    <!-- Contenido Principal -->
    <main class="container" role="main">

        <!-- Bloque Superior Principal -->
        <div class="card hero-section">
            <h2 style="color: #d32f2f;">Nuestra Plataforma de Formación</h2>
            <p style="line-height: 1.6; text-align: justify; margin-top: 10px;">
                Bienvenidos a nuestra plataforma de formación marcial. Somos un espacio dedicado a la difusión, enseñanza y perfeccionamiento del Taekwondo ITF, comprometidos con transmitir no solo la técnica física, sino también los valores fundamentales que hacen a este arte marcial una forma de vida.
            </p>
        </div>

        <!-- Grilla de Tarjetas Inferiores con SEPARACIÓN (mt-3) -->
        <div class="grid-container mt-3" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
            
            <!-- Tarjeta 1: Instructores -->
            <div class="card" style="margin-bottom: 0;">
                <h3 style="display: flex; align-items: center; justify-content: center; gap: 8px;">
                    <span>🥋</span> Trayectoria e Instructores
                </h3>
                <p style="margin-top: 12px; line-height: 1.5; color: #ccc; text-align: justify;">
                    Nuestro equipo de instructores cuenta con una sólida trayectoria pedagógica y graduaciones oficiales certificadas. Respaldamos nuestra enseñanza en la experiencia constante.
                </p>
            </div>

            <!-- Tarjeta 2: Plan de Estudio -->
            <div class="card" style="margin-bottom: 0;">
                <h3 style="display: flex; align-items: center; justify-content: center; gap: 8px;">
                    <span>📚</span> Plan de Estudio Estructurado
                </h3>
                <p style="margin-top: 12px; line-height: 1.5; color: #ccc; text-align: justify;">
                    Diseñamos un plan de estudio estructurado de forma progresiva. Este programa está pensado para acompañarte paso a paso en tu evolución, desde tus primeros pasos como cinturón blanco hasta niveles avanzados.
                </p>
            </div>

        </div>

        <!-- Botón para regresar al menú (también con separación) -->
        <div class="card mt-3" style="text-align: center;">
            <h3>¿Listo para empezar?</h3>
            <a href="index.php" class="btn-comprar" style="display:inline-block; width:auto; padding:10px 25px; text-decoration:none; margin-top:12px;">VOLVER AL MENÚ</a>
        </div>

    </main>

    <!-- Pie de página -->
    
<?php require __DIR__ . '/includes/footer.php'; ?>
