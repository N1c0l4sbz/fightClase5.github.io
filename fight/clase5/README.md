# Clase 5 — Formularios GET y POST

La implementación está integrada a las páginas originales para no duplicar la tienda:

- **GET:** `../productos.php` permite buscar por texto y categoría, conserva filtros y muestra resultados con PDO preparado.
- **POST:** `../index.php` y `../preguntas.php` reciben consultas, validan datos, preservan valores si hay error y guardan en MySQL.
- **POST:** `../crear-cuenta.php` registra usuarios con validación, correo único y `password_hash`.
- **Seguridad:** `trim`, validación de email, `htmlspecialchars` al imprimir, consultas preparadas y token CSRF.

Capturas reales: agregar a `../docs/capturas/` después de ejecutar en XAMPP. No se incluyen capturas simuladas.
