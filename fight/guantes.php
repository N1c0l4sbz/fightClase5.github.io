<?php $titulo_pagina = "Guantes de Kickboxing - Impact Fight"; $base = ''; require_once __DIR__ . '/includes/header.php'; ?>
<header role="banner">
        <div class="header-content">
            <h1>Impact Fight</h1>
            <p>Guantes de Kickboxing y Boxeo</p>
        </div>
    </header>
<?php require __DIR__ . '/includes/nav.php'; ?>


    <main class="container" role="main">
        <div class="card hero-section" style="display: flex; flex-wrap: wrap; gap: 20px; align-items: flex-start;">
            
            <!-- Imagen del producto -->
            <div style="flex: 1; min-width: 280px; text-align: center;">
                <img src="img/guantes de kick boxing.webp" alt="Guantes de Kickboxing" style="max-width: 100%; height: auto; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.5);">
            </div>

            <!-- Descripción técnica -->
            <div style="flex: 1; min-width: 280px;">
                <h2 style="color: #d32f2f;">Detalles del Producto</h2>
                <p>Equipamiento de protección indispensable diseñado con relleno inyectado de alta densidad para absorber el impacto y cuidar las articulaciones de tus manos y muñecas.</p>
                <ul style="padding-left: 20px; margin-top: 10px;">
                    <li><strong>Relleno:</strong> Espuma inyectada multicapa de máxima absorción.</li>
                    <li><strong>Cierre:</strong> Velcro ancho reforzado para excelente firmeza en la muñeca.</li>
                    <li><strong>Ventilación:</strong> Palma microperforada para evitar malos olores y humedad.</li>
                </ul>
            </div>

            <!-- Cajita de Compra (Precio, Talles/Onzas y Botón) -->
            <div style="flex: 0.9; min-width: 260px; background-color: #ffffff; color: #111111; padding: 20px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.3);">
                <p style="font-size: 0.85rem; color: #666; margin-bottom: 5px;">ID de Producto: 19771</p>
                <p style="font-size: 0.85rem; color: #666; margin-bottom: 15px;"><strong>Categoría:</strong> Indumentaria / Guantes</p>

                <h2 style="font-size: 2rem; color: #d32f2f; margin-bottom: 15px;">$320.000</h2>

                <p style="margin-bottom: 8px; font-size: 0.9rem;"><strong>COLOR:</strong> ROJO / NEGRO</p>

                <div style="margin-bottom: 15px;">
                    <label for="onzas-guantes" style="display: block; font-weight: bold; font-size: 0.9rem; margin-bottom: 5px;">ONZAS (MEDIDA):</label>
                    <select id="onzas-guantes" name="onzas" style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
                        <option value="10oz">10 OZ</option>
                        <option value="12oz" selected>12 OZ</option>
                        <option value="14oz">14 OZ</option>
                        <option value="16oz">16 OZ</option>
                    </select>
                </div>

                <div style="margin-bottom: 20px;">
                    <label for="cantidad-guantes" style="display: block; font-weight: bold; font-size: 0.9rem; margin-bottom: 5px;">CANTIDAD:</label>
                    <input type="number" id="cantidad-guantes" name="cantidad" value="1" min="1" max="10" style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
                </div>

                <button class="btn-comprar" style="width: 100%; padding: 12px; background-color: #d32f2f; color: #ffffff; border: none; border-radius: 6px; font-weight: bold; font-size: 1rem; cursor: pointer;">AGREGAR AL CARRITO</button>
            </div>

        </div>

        <div class="card" style="text-align: center; margin-top: 25px;">
            <h3>¿Quieres seguir explorando?</h3>
            <a href="indumentaria.php" class="btn-comprar" style="display:inline-block; width:auto; padding:10px 25px; text-decoration:none; margin-top:10px;">VOLVER A INDUMENTARIA</a>
        </div>
    </main>

    
<?php require __DIR__ . '/includes/footer.php'; ?>
