/*
    VISTAS:
Las podemos definir como una constancia almacenada en la base de datos que se utilzia como una tabla virtual
No almacena datos sino que utiliza asociasiones y los dayos originales
de las tablas, de forma que siempre se mantine actualizada
*/

CREATE VIEW entradas_con_nombres AS
SELECT e.id, e.titulo, u.nombre AS 'Autor' , c.nombre AS 'Categoria'  FROM entradas e  INNER JOIN usuarios u ON e.usuario_id = u.id INNER JOIN categorias c ON e.categoria_id = c.id;  


