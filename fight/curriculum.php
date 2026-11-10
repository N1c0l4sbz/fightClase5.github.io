<?php $titulo_pagina = "Curriculum Vitae - Nicolas Baez"; $base = ''; require_once __DIR__ . '/includes/header.php'; ?>
<header role="banner">
        <div class="header-content">
            <h1>Instructor y Desarrollador</h1>
            <p>Perfil Profesional y Trayectoria Deportiva</p>
        </div>
    </header>
<?php require __DIR__ . '/includes/nav.php'; ?>


    <!-- Contenido Principal -->
    <main class="container" role="main">

        <!-- Experiencia Deportiva -->
        <div class="card">
            <h2>Experiencia Deportiva y Liderazgo</h2>
            
            <h3 style="margin-top: 20px; color: #d32f2f;">Instructor de Taekwondo ITF - Academia Midas</h3>
            
            <p style="margin-top: 12px; margin-bottom: 12px;"><strong>Rango:</strong> Cinturón Negro I Dan (Graduado en 2019)</p>
            
            <p style="margin-top: 15px; margin-bottom: 10px; font-weight: bold;">Responsabilidades principales:</p>
            <ul style="padding-left: 20px;">
                <li style="margin-bottom: 10px;">Planificación y dictado de clases de Taekwondo ITF para alumnos de diferentes edades y niveles.</li>
                <li style="margin-bottom: 10px;">Fomento de valores fundamentales: cortesía, integridad, perseverancia, autocontrol y espíritu indomable.</li>
                <li style="margin-bottom: 10px;">Preparación física, técnica y teórica de practicantes para exámenes de graduación y torneos.</li>
                <li style="margin-bottom: 10px;">Gestión de grupos y desarrollo de liderazgo en niños, jóvenes y adultos.</li>
            </ul>
        </div>

        <!-- Grid para Educación y Proyectos -->
        <div class="grid-container" style="margin-top: 25px;">
            
            <!-- Tarjeta Educación -->
            <div class="card" style="padding: 30px;">
                <h2 style="text-align: center; color: #d32f2f; margin-bottom: 25px;">Educación y Formación</h2>
                
                <p style="margin-bottom: 25px; line-height: 1.6;"><strong>Educación Técnica:</strong> Escuela Técnica N° 3100 "República de la India" (Salta) | <em>En curso</em></p>
                
                <h3 style="margin-top: 25px; margin-bottom: 15px; font-size: 1.1rem; text-align: center;">Cursos y Aprendizaje Autónomo</h3>
                <ul style="padding-left: 20px;">
                    <li style="margin-bottom: 10px;">Desarrollo de Software y Lógica de Programación.</li>
                    <li style="margin-bottom: 10px;">Fundamentos de Contabilidad y Finanzas.</li>
                    <li style="margin-bottom: 10px;">Introducción a la Programación con Microcontroladores (Arduino).</li>
                </ul>
            </div>

            <!-- Tarjeta Proyectos -->
            <div class="card" style="padding: 30px;">
                <h2 style="text-align: center; color: #d32f2f; margin-bottom: 25px;">Proyectos Destacados</h2>
                
                <div style="margin-bottom: 25px;">
                    <p style="line-height: 1.6;"><strong>Impact Fight:</strong> Plataforma web e-commerce enfocada en indumentaria y equipamiento para artes marciales (HTML5, CSS3, JS).</p>
                </div>
                
                <div style="margin-bottom: 20px;">
                    <p style="line-height: 1.6;"><strong>Innovadores del Futuro 2026:</strong> Desarrollo de aplicación web progresiva para certamen de innovación técnica.</p>
                </div>
            </div>

        </div>

        <!-- Botón para regresar -->
        <div class="card" style="text-align: center; margin-top: 25px;">
            <h3>¿Terminaste de consultar?</h3>
            <a href="index.php" class="btn-comprar" style="display:inline-block; width:auto; padding:10px 25px; text-decoration:none; margin-top: 10px;">VOLVER AL MENÚ</a>
        </div>

    </main>

    <!-- Pie de página -->
    
<?php require __DIR__ . '/includes/footer.php'; ?>
