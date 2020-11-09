/*
    SUBCONSULTAS
 Consultas que se ejecutan dentro de otras,
 Consisten en utilizar los resultados de la subconsulta para operar en la 
 consulta principal
 Juggando con las claves ajenas / foraneas   
*/

INSERT INTO usuarios VALUES(NULL, "Admin", "Admin","Admin@admin.com", "admin", CURDATE());

# SUBCONSULTAS: SACAR USUARIOS CON ENTRADAS #
SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas);

# SACAR LOS USUARIOS QUE TENGAN ALGUNA ENTRADA QUE EN SU TITULO HABLE DE GTA #
SELECT nombre, apellidos FROM usuarios WHERE id IN(SELECT usuario_id FROM entradas WHERE titulo LIKE "%GTA%");

# SACAR TODAS LAS ENTRADAS DE LA CATEGORIA ACCION UTILIZANDO SU NOMBRE #
SELECT * FROM entradas WHERE categoria_id IN(SELECT id FROM categorias WHERE nombre LIKE "Accion");

# MOSTRAR LAS CATEGORIAS CON MAS DE TRES ENTRADAS # 
SELECT * FROM categorias WHERE id IN (SELECT categoria_id  FROM entradas GROUP BY categoria_id HAVING COUNT(categoria_id) >= 3);

# MOSTRAR LOS USUARIOS QUE CREARON LA ENTRADA UN MARTES #
SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas WHERE DAYOFWEEK(fecha) = 3); 

# MOSTRAR EL NOMBRE DEL USUARIO QUE TENGA MAS ENTRADAS #
SELECT CONCAT(nombre, ' ', apellidos) AS 'El usuario con mas entradas' FROM usuarios WHERE id = ( SELECT  usuario_id FROM entradas GROUP BY usuario_id ORDER BY COUNT(id) desc limit 1);

# MOSTRAR LAS CATEGORIAS SIN ENTRADAS #
SELECT * FROM categorias WHERE id NOT IN (SELECT categoria_id FROM entradas);


















