<?php $titulo_pagina = "Indumentaria - Impact Fight"; $base = ''; require_once __DIR__ . '/includes/header.php'; ?>
<header role="banner">
        <div class="header-content">
            <h1>Sección de Indumentaria</h1>
            <p>Ropa técnica para Taekwondo y Kickboxing de alta movilidad</p>
        </div>
    </header>
<?php require __DIR__ . '/includes/nav.php'; ?>


    <!-- Contenido Principal -->
    <main class="container" role="main">

        <!-- Presentación de la categoría -->
        <div class="card hero-section">
            <h2>Indumentaria Oficial de Kickboxing y Deportes de Contacto</h2>
            <p>Para rendir al máximo en cada entrenamiento y dar tu mejor versión en el ring, la elección de la ropa es fundamental. La indumentaria está diseñada bajo una regla estricta: ofrecer la máxima ligereza, comodidad y resistencia. Cada prenda debe permitir una total libertad de movimiento para lanzar golpes y combinaciones fluidas, soportar el roce constante y ayudar a disipar el sudor rápidamente.</p>
            <p>Contar con el equipamiento adecuado no solo mejora tu rendimiento y velocidad en los desplazamientos, sino que también te brinda la protección necesaria para entrenar seguro día tras día.</p>
        </div>

        <!-- Subcategorías de productos -->
        <div class="card">
            <h2 style="text-align: center;">Catálogo de Indumentaria</h2>
            <p style="text-align: center;">Selecciona una subcategoría para explorar los productos disponibles:</p>

            <div class="grid-container" style="margin-top: 20px;">
                
                <!-- Tarjeta Shorts -->
                <div class="card" style="text-align: center;">
                    <img src="img/short de kickboxing.webp" alt="Short de Kickboxing" style="max-width: 100%; height: auto; border-radius: 8px; margin-bottom: 10px;">
                    <h3>🩳 Shorts de Combate</h3>
                    <p>Diseñados para máxima movilidad en patadas y desplazamientos rápidos.</p>
                    <a href="shorts.php" class="btn-comprar" style="display:block; text-decoration:none; margin-top:10px;">Ver Shorts</a>
                </div>

                <!-- Tarjeta Remeras -->
                <div class="card" style="text-align: center;">
                    <img src="img/remera de kickboxing.webp" alt="Remera de Kickboxing" style="max-width: 100%; height: auto; border-radius: 8px; margin-bottom: 10px;">
                    <h3>👕 Remeras y Lycras</h3>
                    <p>Telas respirables de alta durabilidad para resistir los agarres y la transpiración.</p>
                    <a href="remeras.php" class="btn-comprar" style="display:block; text-decoration:none; margin-top:10px;">Ver Remeras</a>
                </div>

                <!-- Tarjeta Guantes -->
                <div class="card" style="text-align: center;">
                    <img src="img/guantes de kick boxing.webp" alt="Guantes de Kickboxing" style="max-width: 100%; height: auto; border-radius: 8px; margin-bottom: 10px;">
                    <h3>🥊 Guantes</h3>
                    <p>Protección y relleno de alta densidad para entrenamiento y competencia.</p>
                    <a href="guantes.php" class="btn-comprar" style="display:block; text-decoration:none; margin-top:10px;">Ver Guantes</a>
                </div>

            </div>
        </div>

        <!-- Botón para regresar -->
        <div class="card" style="text-align: center;">
            <h3>¿Terminaste de mirar?</h3>
            <a href="index.php" class="btn-comprar" style="display:inline-block; width:auto; padding:10px 25px; text-decoration:none;">VOLVER AL MENÚ</a>
        </div>

    </main>

    <!-- Pie de página -->
    
<?php require __DIR__ . '/includes/footer.php'; ?>
