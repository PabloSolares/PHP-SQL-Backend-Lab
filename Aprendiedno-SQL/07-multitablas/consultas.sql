/*
    CONSULTA MULTITABLA
 Son consultas que sirven para consultar vairas tablas en una sola sentencia
*/

# MOSTRAR LAS ENTRADAS CON EL NOMBRE DEL AUTOR Y EL NOMBRE DE LAS CATEGORIAS  # 
SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoria'  FROM entradas e, usuarios u , categorias c WHERE e.usuario_id = u.id AND e.categoria_id = c.id;

# INNER JOIN #
SELECT e.id, e.titulo, u.nombre AS 'Autor' , c.nombre AS 'Categoria'  FROM entradas e  INNER JOIN usuarios u ON e.usuario_id = u.id INNER JOIN categorias c ON e.categoria_id = c.id;  












# MOSTRAR EL NOMBRE DE LAS CATEGORIAS Y AL LADO CUANTAS ENTRADAS TIENE #
SELECT c.nombre, COUNT(e.id) FROM categorias c,entradas e WHERE e.categoria_id = c.id GROUP BY e.categoria_id;

# LEFT JOIN #
SELECT c.nombre, COUNT(e.id) FROM categorias c LEFT JOIN entradas e ON e.categoria_id = c.id GROUP BY e.categoria_id;

SELECT c.nombre, COUNT(e.id) FROM entradas e  RIGHT JOIN categorias c ON c.id = e.categoria_id  GROUP BY e.categoria_id;

# MOSTRAR EL EMAIL DE LOS USUARIOS Y AL LADO CUANTAS ENTRADAS TINEN #
SELECT u.email, COUNT(titulo) FROM usuarios u, entradas e WHERE e.usuario_id = u.id GROUP BY e.usuario_id;



