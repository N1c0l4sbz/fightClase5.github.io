<?php $titulo_pagina = "Accesorios - Impact Fight"; $base = ''; require_once __DIR__ . '/includes/header.php'; ?>
<header role="banner">
        <div class="header-content">
            <h1>Sección de Accesorios</h1>
            <p>Equipamiento y protecciones reglamentarias para Taekwondo ITF</p>
        </div>
    </header>
<?php require __DIR__ . '/includes/nav.php'; ?>


    <!-- Contenido Principal -->
    <main class="container" role="main">

        <!-- Presentación de la categoría -->
        <div class="card hero-section">
            <h2>Accesorios y Protecciones para Taekwondo</h2>
            <p style="line-height: 1.6; text-align: justify; margin-top: 10px;">
                El equipamiento de protección es fundamental para garantizar la seguridad durante las prácticas de lucha y competencias oficiales. Todos los accesorios están diseñados para absorber impactos, proteger las articulaciones y cumplir con los estándares de competición.
            </p>
        </div>

        <!-- Subcategorías de productos con separación mejorada -->
        <div class="card" style="margin-top: 20px;">
            <h2 style="text-align: center;">Catálogo de Accesorios</h2>
            <p style="text-align: center; color: #aaa; margin-top: 5px;">Selecciona una categoría para ver los productos disponibles:</p>

            <div class="grid-container" style="margin-top: 25px; display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
                
                <!-- Tarjeta Protectores de Pie -->
                <div class="card" style="text-align: center; display: flex; flex-direction: column; justify-content: space-between; background-color: #242424; margin-bottom: 0;">
                    <div>
                        <h3 style="display: flex; align-items: center; justify-content: center; gap: 8px;">
                            <span>🦶</span> Protectores de Pie (Foot Protectors)
                        </h3>
                        <p style="margin-top: 12px; line-height: 1.5; color: #ccc;">Protección ergonómica de alta densidad para empeine y tobillo.</p>
                    </div>
                    <a href="pies.php" class="btn-comprar" style="display:block; text-decoration:none; margin-top:20px; padding: 10px;">Ver Protectores de Pie</a>
                </div>

                <!-- Tarjeta Protectores de Mano -->
                <div class="card" style="text-align: center; display: flex; flex-direction: column; justify-content: space-between; background-color: #242424; margin-bottom: 0;">
                    <div>
                        <h3 style="display: flex; align-items: center; justify-content: center; gap: 8px;">
                            <span>🥊</span> Protectores de Mano (Gloves)
                        </h3>
                        <p style="margin-top: 12px; line-height: 1.5; color: #ccc;">Guantes abiertos y guantines oficiales para combate de Taekwondo ITF.</p>
                    </div>
                    <a href="mano.php" class="btn-comprar" style="display:block; text-decoration:none; margin-top:20px; padding: 10px;">Ver Protectores de Mano</a>
                </div>

            </div>
        </div>

        <!-- Botón para regresar al menú -->
        <div class="card" style="text-align: center; margin-top: 20px;">
            <h3>¿Terminaste de mirar?</h3>
            <a href="index.php" class="btn-comprar" style="display:inline-block; width:auto; padding:10px 25px; text-decoration:none; margin-top:12px;">VOLVER AL MENÚ</a>
        </div>

    </main>

    <!-- Pie de página -->
    
<?php require __DIR__ . '/includes/footer.php'; ?>
