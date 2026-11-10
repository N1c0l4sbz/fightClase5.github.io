USE lunar_mca;
-- Datos de prueba: ejecutar después de schema.sql. Se pueden repetir las pruebas con registros nuevos.
INSERT INTO categorias(nombre) VALUES ('Entrenamiento'), ('Promociones');
INSERT INTO productos(categoria_id,nombre,descripcion,precio,stock) VALUES
((SELECT id FROM categorias WHERE nombre='Entrenamiento'),'Bolsa de entrenamiento de prueba','Registro de ejemplo para CRUD',25000.00,5),
((SELECT id FROM categorias WHERE nombre='Promociones'),'Kit de práctica de prueba','Registro de ejemplo para CRUD',18000.00,3);
SELECT id,nombre,precio FROM productos WHERE precio >= 10000 ORDER BY precio ASC;
SELECT p.id,p.nombre,c.nombre AS categoria,p.precio FROM productos p INNER JOIN categorias c ON p.categoria_id=c.id ORDER BY p.nombre;
UPDATE productos SET precio=24000.00 WHERE nombre='Bolsa de entrenamiento de prueba';
DELETE FROM productos WHERE nombre='Kit de práctica de prueba';
