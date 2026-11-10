<?php $titulo_pagina = "Protectores de Pie Granmarc Invictus - Impact Fight"; $base = ''; require_once __DIR__ . '/includes/header.php'; ?>
<header role="banner">
        <div class="header-content">
            <h1>Impact Fight</h1>
            <p>Protectores de Pie Granmarc Invictus</p>
        </div>
    </header>
<?php require __DIR__ . '/includes/nav.php'; ?>


    <main class="container" role="main">
        <div class="card hero-section" style="display: flex; flex-wrap: wrap; gap: 20px; align-items: flex-start;">
            
            <!-- Contenedor con imágenes reales de pies -->
            <div style="flex: 1; min-width: 280px; height: 380px; background-color: #ffffff; border-radius: 8px; padding: 10px; display: flex; align-items: center; justify-content: center; gap: 10px; box-shadow: 0 4px 10px rgba(0,0,0,0.5);">
                <img src="img/protectores_de_pie_azules.webp" alt="Protectores de Pie Azules" style="max-width: 48%; max-height: 100%; object-fit: contain;">
                <img src="img/protectores_de_pie_rojos.webp" alt="Protectores de Pie Rojos" style="max-width: 48%; max-height: 100%; object-fit: contain;">
            </div>

            <!-- Detalles específicos de Pie -->
            <div style="flex: 1; min-width: 280px;">
                <h2 style="color: #d32f2f;">Detalles del Producto</h2>
                <p style="text-align: justify; line-height: 1.6; margin-top: 10px;">
                    Protección ergonómica de alta densidad diseñada para proteger el empeine, empeine lateral y tobillo contra los impactos de combate.
                </p>
                <ul style="padding-left: 20px; margin-top: 12px; line-height: 1.6;">
                    <li><strong>Acolchado:</strong> Espuma inyectada de alta absorción para choque.</li>
                    <li><strong>Sujeción:</strong> Bandas elásticas inferiores para los dedos y elástico de tobillo con abrojo.</li>
                    <li><strong>Suela abierta:</strong> Asegura la máxima adherencia al tatami evitando deslices.</li>
                    <li><strong>Homologación:</strong> Apto para competencias oficiales de Taekwondo ITF.</li>
                </ul>
            </div>

            <!-- Tarjeta de Compra -->
            <div style="flex: 0.9; min-width: 260px; background-color: #ffffff; color: #111111; padding: 20px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.3);">
                <p style="font-size: 0.85rem; color: #666; margin-bottom: 5px;">ID de Producto: 19770</p>
                <p style="font-size: 0.85rem; color: #666; margin-bottom: 15px;"><strong>Categoría:</strong> Protecciones / Accesorios</p>

                <h2 style="font-size: 2rem; color: #d32f2f; margin-bottom: 15px;">$58.000</h2>

                <p style="margin-bottom: 8px; font-size: 0.9rem;"><strong>COLOR:</strong> ROJO / AZUL</p>

                <div style="margin-bottom: 15px;">
                    <label for="talle-pies" style="display: block; font-weight: bold; font-size: 0.9rem; margin-bottom: 5px;">TALLE:</label>
                    <select id="talle-pies" name="talle" style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
                        <option value="S">S</option>
                        <option value="M" selected>M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                    </select>
                </div>

                <div style="margin-bottom: 20px;">
                    <label for="cantidad-pies" style="display: block; font-weight: bold; font-size: 0.9rem; margin-bottom: 5px;">CANTIDAD:</label>
                    <input type="number" id="cantidad-pies" name="cantidad" value="1" min="1" max="10" style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
                </div>

                <button class="btn-comprar" style="width: 100%; padding: 12px; background-color: #d32f2f; color: #ffffff; border: none; border-radius: 6px; font-weight: bold; font-size: 1rem; cursor: pointer;">AGREGAR AL CARRITO</button>
            </div>

        </div>

        <div class="card" style="text-align: center; margin-top: 20px;">
            <h3>¿Quieres seguir explorando?</h3>
            <a href="accesorios.php" class="btn-comprar" style="display:inline-block; width:auto; padding:10px 25px; text-decoration:none; margin-top:10px;">VOLVER A ACCESORIOS</a>
        </div>
    </main>

    
<?php require __DIR__ . '/includes/footer.php'; ?>
