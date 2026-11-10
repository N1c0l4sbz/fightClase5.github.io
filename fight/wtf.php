<?php $titulo_pagina = "Dobok WTF - Impact Fight"; $base = ''; require_once __DIR__ . '/includes/header.php'; ?>
<header role="banner">
        <div class="header-content">
            <h1>Impact Fight</h1>
            <p>Dobok Taekwondo WTF / World Taekwondo</p>
        </div>
    </header>
<?php require __DIR__ . '/includes/nav.php'; ?>


    <main class="container" role="main">
        <div class="card hero-section" style="display: flex; flex-wrap: wrap; gap: 20px; align-items: flex-start;">
            
            <div style="flex: 1; min-width: 280px; text-align: center;">
                <img src="img/uniforme wtf azul.webp" alt="Dobok Taekwondo WTF" style="max-width: 100%; height: auto; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.5);">
            </div>

            <div style="flex: 1; min-width: 280px;">
                <h2 style="color: #d32f2f;">Detalles del Producto</h2>
                <p>Dobok con cuello V homologado para Taekwondo World Taekwondo (WTF). Confeccionado con tela técnica ultra respirable, ligera y resistente a tirones.</p>
                <ul style="padding-left: 20px; margin-top: 10px;">
                    <li><strong>Diseño:</strong> Chaqueta con cuello en V blanco/negro reglamentario.</li>
                    <li><strong>Tejido:</strong> Poliéster de secado rápido y ventilación continua.</li>
                    <li><strong>Corte:</strong> Amplio en articulaciones para elasticidad de patadas.</li>
                </ul>
            </div>

            <div style="flex: 0.9; min-width: 260px; background-color: #ffffff; color: #111111; padding: 20px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.3);">
                <p style="font-size: 0.85rem; color: #666; margin-bottom: 5px;">ID de Producto: 20812</p>
                <p style="font-size: 0.85rem; color: #666; margin-bottom: 15px;"><strong>Categoría:</strong> Uniformes / Taekwondo WTF</p>

                <h2 style="font-size: 2rem; color: #d32f2f; margin-bottom: 15px;">$290.000</h2>

                <p style="margin-bottom: 8px; font-size: 0.9rem;"><strong>COLOR:</strong> BLANCO / AZUL</p>

                <div style="margin-bottom: 15px;">
                    <label for="talle-wtf" style="display: block; font-weight: bold; font-size: 0.9rem; margin-bottom: 5px;">TALLE (ESTATURA):</label>
                    <select id="talle-wtf" name="talle" style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
                        <option value="1">1 (140 cm)</option>
                        <option value="2">2 (150 cm)</option>
                        <option value="3" selected>3 (160 cm)</option>
                        <option value="4">4 (170 cm)</option>
                        <option value="5">5 (180 cm)</option>
                    </select>
                </div>

                <div style="margin-bottom: 20px;">
                    <label for="cantidad-wtf" style="display: block; font-weight: bold; font-size: 0.9rem; margin-bottom: 5px;">CANTIDAD:</label>
                    <input type="number" id="cantidad-wtf" name="cantidad" value="1" min="1" max="10" style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
                </div>

                <button class="btn-comprar" style="width: 100%; padding: 12px; background-color: #d32f2f; color: #ffffff; border: none; border-radius: 6px; font-weight: bold; font-size: 1rem; cursor: pointer;">AGREGAR AL CARRITO</button>
            </div>

        </div>

        <div class="card" style="text-align: center; margin-top: 25px;">
            <h3>¿Quieres seguir explorando?</h3>
            <a href="uniformes.php" class="btn-comprar" style="display:inline-block; width:auto; padding:10px 25px; text-decoration:none; margin-top:10px;">VOLVER A UNIFORMES</a>
        </div>
    </main>

    
<?php require __DIR__ . '/includes/footer.php'; ?>
