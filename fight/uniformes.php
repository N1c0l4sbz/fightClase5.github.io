<?php $titulo_pagina = "Uniformes - Impact Fight"; $base = ''; require_once __DIR__ . '/includes/header.php'; ?>
<header role="banner">
        <div class="header-content">
            <h1>Sección de Uniformes</h1>
            <p>Doboks oficiales para entrenamiento y competición</p>
        </div>
    </header>
<?php require __DIR__ . '/includes/nav.php'; ?>


    <main class="container" role="main">

        <div class="card hero-section">
            <h2>Uniformes Oficiales de Taekwondo</h2>
            <p>El Dobok representa la disciplina y la tradición. Fabricados con materiales livianos, resistentes y de secado rápido para brindar la máxima comodidad.</p>
        </div>

        <div class="card">
            <h2 style="text-align: center;">Catálogo de Uniformes</h2>

            <div class="grid-container" style="margin-top: 20px;">
                
                <!-- Tarjeta Dobok ITF -->
                <div class="card" style="text-align: center; display: flex; flex-direction: column; justify-content: space-between;">
                    <div>
                        <a href="itf.php" style="display: block; height: 320px; overflow: hidden; background-color: #ffffff; border-radius: 8px; margin-bottom: 15px; padding: 10px;">
                            <img src="img/image.png" alt="Uniforme ITF" style="width: 100%; height: 100%; object-fit: contain;">
                        </a>
                        <h3>🥋 Dobok Taekwondo ITF</h3>
                        <p>Diseño institucional y bordados oficiales reglamentarios.</p>
                    </div>
                    <a href="itf.php" class="btn-comprar" style="display:block; text-decoration:none; margin-top:15px;">Ver más</a>
                </div>

                <!-- Tarjeta Dobok WTF -->
                <div class="card" style="text-align: center; display: flex; flex-direction: column; justify-content: space-between;">
                    <div>
                        <a href="wtf.php" style="display: block; height: 320px; overflow: hidden; background-color: #ffffff; border-radius: 8px; margin-bottom: 15px; padding: 10px;">
                            <img src="img/uniforme wtf azul.webp" alt="Uniforme WTF" style="width: 100%; height: 100%; object-fit: contain;">
                        </a>
                        <h3>🥋 Dobok Taekwondo WTF</h3>
                        <p>Cuello V oficial para entrenamiento y competencia.</p>
                    </div>
                    <a href="wtf.php" class="btn-comprar" style="display:block; text-decoration:none; margin-top:15px;">Ver más</a>
                </div>

            </div>
        </div>

        <div class="card" style="text-align: center;">
            <h3>¿Terminaste de mirar?</h3>
            <a href="index.php" class="btn-comprar" style="display:inline-block; width:auto; padding:10px 25px; text-decoration:none; margin-top:10px;">VOLVER AL MENÚ</a>
        </div>

    </main>

    
<?php require __DIR__ . '/includes/footer.php'; ?>
