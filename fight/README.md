# Lunar MCA — Tienda Impact Fight (proyecto progresivo PHP)

Proyecto recibido en `templates.zip`: tienda de equipamiento marcial **Impact Fight**. Se conservó su estética, textos, imágenes, categorías, CSS y JavaScript, migrando las vistas a PHP. El nombre de la carpeta de entrega es Lunar MCA; la marca visible original continúa como Impact Fight para mantener fidelidad al sitio recibido.

## TP4 — Migración, SSI, SSR y entorno

- Todas las páginas `.html` se convirtieron a `.php` y sus enlaces internos fueron actualizados.
- `includes/header.php`, `includes/nav.php`, `includes/footer.php` evitan duplicación.
- `$titulo_pagina` controla el título SSR y `nav.php` aplica `active` y `aria-current`.
- `config/env.php` lee `.env` local; `.env.example` documenta la configuración y `.gitignore` excluye `.env`.

## Clase 5 — Formularios

- **GET** en `productos.php`: búsqueda por nombre/descripción y categoría.
- **POST** en `index.php`, `preguntas.php` y `crear-cuenta.php`: validación, mensajes, persistencia y conservación de campos tras error.
- Salidas escapadas con `htmlspecialchars`, consultas preparadas PDO y CSRF en formularios.
- Ver `clase5/README.md`.

## TP6 — Normalización y MySQL

- `tp6/NORMALIZACION.md`: 0FN, 1FN, 2FN, 3FN, PK/FK.
- `tp6/schema.sql`: tablas `roles`, `usuarios`, `categorias`, `productos`, `consultas`, `pedidos`, `detalle_pedidos`, índices y auditoría.
- `tp6/consultas.sql`: INSERT, SELECT con WHERE/ORDER BY, JOIN, UPDATE y DELETE.
- `tp6/datos_iniciales.sql`: catálogo de ejemplo con imágenes originales. **Precios y stock son de demostración, no precios reales.**

## TP7 — PDO y CRUD integrado

- `config/conexion.php`: PDO, UTF-8, excepciones y consultas preparadas.
- `admin/index.php`, `admin/crear.php`, `admin/editar.php`, `admin/eliminar.php`: listado, alta, edición y borrado de productos.
- El catálogo público en `productos.php` refleja inmediatamente los cambios de MySQL.

## Tecnologías

HTML5, CSS3, JavaScript, PHP 8.x, MySQL, PDO, XAMPP o Laragon. El diseño original no incluye Bootstrap; se mantuvo su CSS propio.

## Instalación local (XAMPP)

1. Copiar la carpeta `Lunar_MCA` completa a `C:\xampp\htdocs\Lunar_MCA`.
2. Iniciar **Apache** y **MySQL** desde XAMPP.
3. Abrir `http://localhost/phpmyadmin` e importar primero `tp6/schema.sql` (contiene `CREATE DATABASE` y `USE`).
4. Importar `tp6/datos_iniciales.sql` para poblar el catálogo. `tp6/consultas.sql` es una prueba independiente y opcional.
5. Copiar `.env.example` como `.env` y configurar `DB_USER`, `DB_PASS`, `DB_HOST`, etc. (en el ZIP se incluye un `.env` local de ejemplo, que **no debe subirse a Git**).
6. Abrir `http://localhost/Lunar_MCA/index.php`.
7. Probar búsqueda en `productos.php`, envío en `preguntas.php` y CRUD en `admin/index.php`.

**Importante:** la extensión `pdo_mysql` debe estar habilitada en PHP. No abrir los `.php` con doble clic: usar `http://localhost`.

## Seguridad y límites

El panel `admin/` está diseñado **solo para demostración local** y **no tiene login de administrador**. No exponerlo en internet sin implementar autenticación y autorización. La página de crear cuenta registra usuarios, pero no incluye inicio de sesión ni compras reales. Los envíos de consultas se guardan en la tabla `consultas`, no se envían por correo. Los mensajes de errores internos de MySQL no se muestran al visitante.

## Evidencia y entrega en GitHub

Falta completar con datos reales del estudiante:

- **Figma:** [Agregar URL del prototipo original].
- **GitHub:** [Agregar URL del repositorio público].
- **Capturas:** guardar imágenes reales en `docs/capturas/`: localhost, SSI, título/menú activo, `.env.example`, POST/GET y CRUD.
- **Rama sugerida TP4:** `feature/migracion-php-ssi`; hacer commits descriptivos y abrir Pull Request a `main`.

No se inventaron enlaces, capturas, historial de Git ni pruebas de ejecución en XAMPP. Para la Clase 5 el desarrollo se encuentra integrado en el sitio y documentado dentro de la carpeta `clase5/`, en lugar de duplicar una segunda tienda.


## Panel protegido, roles y subida de imágenes

1. Importar `tp6/schema.sql` (ya incluye las tablas `roles` y `usuarios`).
2. Abrir la terminal en `C:\xampp\htdocs\Lunar_MCA` y ejecutar `C:\xampp\php\php.exe admin/setup-admin.php`. Escribir correo, nombre y contraseña (12 caracteres mínimo). Este script **solo funciona desde la consola** y no se puede ejecutar desde el navegador.
3. Entrar a `http://localhost/Lunar_MCA/login.php` con esa cuenta. Abrir `admin/index.php` y `admin/roles.php`.
4. Los nuevos registros desde `crear-cuenta.php` tienen rol `cliente` y no pueden acceder a `/admin/`. Solo un administrador puede cambiar roles en `admin/roles.php`.
5. En Crear/Editar producto, pulsar **Seleccionar archivo**. Se admiten JPG, PNG y WEBP de hasta 3 MB; la imagen se guarda con nombre aleatorio en `img/`. Si no se selecciona archivo al editar, se conserva la imagen actual.
6. Para comprobar seguridad, cerrar sesión e intentar entrar directamente a `/admin/index.php` y `/admin/roles.php`: se debe pedir iniciar sesión. Con cuenta cliente debe aparecer acceso denegado.

**Importante:** en un servidor público se requiere además HTTPS, protección de intentos de inicio de sesión y configuración del servidor para impedir ejecución de scripts en `img/`.
