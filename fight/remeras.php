<?php $titulo_pagina = "Remeras de Kickboxing - Impact Fight"; $base = ''; require_once __DIR__ . '/includes/header.php'; ?>
<header role="banner">
        <div class="header-content">
            <h1>Impact Fight</h1>
            <p>Remeras y Lycras de Entrenamiento</p>
        </div>
    </header>
<?php require __DIR__ . '/includes/nav.php'; ?>


    <main class="container" role="main">
        <div class="card hero-section" style="display: flex; flex-wrap: wrap; gap: 20px; align-items: flex-start;">
            
            <!-- Imagen del producto -->
            <div style="flex: 1; min-width: 280px; text-align: center;">
                <img src="img/remera de kickboxing.webp" alt="Remera de Kickboxing" style="max-width: 100%; height: auto; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.5);">
            </div>

            <!-- Descripción técnica -->
            <div style="flex: 1; min-width: 280px;">
                <h2 style="color: #d32f2f;">Detalles del Producto</h2>
                <p>Indumentaria superior técnica diseñada para soportar los entrenamientos más exigentes. Su tejido elástico y respirable evita la acumulación de sudor y brinda excelente confort térmico.</p>
                <ul style="padding-left: 20px; margin-top: 10px;">
                    <li><strong>Material:</strong> Poliéster técnico microperforado de secado rápido.</li>
                    <li><strong>Ajuste:</strong> Anatómico, ideal para entrenamiento funcional y combate.</li>
                    <li><strong>Resistencia:</strong> Costuras planas antibacterianas que previenen rozaduras en la piel.</li>
                </ul>
            </div>

            <!-- Cajita de Compra (Precio, Talles y Botón) -->
            <div style="flex: 0.9; min-width: 260px; background-color: #ffffff; color: #111111; padding: 20px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.3);">
                <p style="font-size: 0.85rem; color: #666; margin-bottom: 5px;">ID de Producto: 19770</p>
                <p style="font-size: 0.85rem; color: #666; margin-bottom: 15px;"><strong>Categoría:</strong> Indumentaria / Remeras</p>

                <h2 style="font-size: 2rem; color: #d32f2f; margin-bottom: 15px;">$180.000</h2>

                <p style="margin-bottom: 8px; font-size: 0.9rem;"><strong>COLOR:</strong> NEGRO / ROJO</p>

                <div style="margin-bottom: 15px;">
                    <label for="talle-remera" style="display: block; font-weight: bold; font-size: 0.9rem; margin-bottom: 5px;">TALLE:</label>
                    <select id="talle-remera" name="talle" style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
                        <option value="S">S</option>
                        <option value="M" selected>M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                    </select>
                </div>

                <div style="margin-bottom: 20px;">
                    <label for="cantidad-remera" style="display: block; font-weight: bold; font-size: 0.9rem; margin-bottom: 5px;">CANTIDAD:</label>
                    <input type="number" id="cantidad-remera" name="cantidad" value="1" min="1" max="10" style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
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
