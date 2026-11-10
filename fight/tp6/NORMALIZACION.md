# Normalización del catálogo de Impact Fight / Lunar MCA

## Tabla sin normalizar (0FN)

| Pedido | Cliente | Email | Productos (lista) | Categorías (lista) | Cantidades |
|---|---|---|---|---|---|
| 101 | Ana | ana@ejemplo.com | Guantes, Dobok | Indumentaria, Uniformes | 1, 2 |

Hay listas multivaluadas y datos de cliente repetibles en cada pedido.

## Primera forma normal (1FN)

Una fila por producto de cada pedido, con valores atómicos:

| pedido_id | usuario_email | producto | categoria | cantidad |
|---|---|---|---|---|
| 101 | ana@ejemplo.com | Guantes | Indumentaria | 1 |
| 101 | ana@ejemplo.com | Dobok | Uniformes | 2 |

## Segunda forma normal (2FN)

En la tabla temporal con clave compuesta (pedido_id, producto_id), la cantidad depende de ambos campos, pero los datos del cliente dependen solo de pedido_id y el nombre del producto depende solo de producto_id. Separamos `pedidos`, `productos` y `detalle_pedidos`.

## Tercera forma normal (3FN)

El nombre de categoría depende de categoria_id y no del producto; los datos del usuario dependen de usuario_id y no del pedido; el nombre del rol depende de rol_id. Separamos `categorias`, `usuarios` y `roles` para eliminar dependencias transitivas.

## Tablas finales (PK y FK)

- `roles`: PK `id`.
- `usuarios`: PK `id`, FK `rol_id` → `roles.id`.
- `categorias`: PK `id`.
- `productos`: PK `id`, FK `categoria_id` → `categorias.id`.
- `pedidos`: PK `id`, FK `usuario_id` → `usuarios.id`.
- `detalle_pedidos`: PK `id`, FK `pedido_id` → `pedidos.id`, FK `producto_id` → `productos.id`.
- `consultas`: PK `id`; entidad independiente de mensajes enviados desde el sitio.

Dependencias funcionales principales: `producto_id → categoria_id, nombre, descripcion, precio, stock`; `usuario_id → rol_id, nombre, email`; `(pedido_id, producto_id) → cantidad, precio_unitario` en el modelo conceptual del detalle (la implementación usa un ID autoincremental para cada línea).
