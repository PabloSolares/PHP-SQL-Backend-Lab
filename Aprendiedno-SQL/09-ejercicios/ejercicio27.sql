/*
27. Visualizar los nombres de los clientes y la cantidad de encargos realizados, 
incluyendo los que no hayan realizado encargos
*/
INSERT INTO clientes VALUES(NULL, 5, 'Tienda Organica Inc', 'Murcia', 0, CURDATE());

SELECT cl.nombre, COUNT(e.id) AS 'Cantidad de encargos' FROM clientes cl LEFT JOIN encargos e ON cl.id = e.cliente_id GROUP BY cl.nombre ORDER BY COUNT(e.id) ASC;