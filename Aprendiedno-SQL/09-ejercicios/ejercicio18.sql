/*
18. Listar los clientes que han hecho algun encargo del coche "Mercedes Ranchera"
*/

SELECT * FROM clientes c WHERE id IN (SELECT cliente_id FROM encargos WHERE coche_id IN (SELECT id FROM coches WHERE modelo LIKE '%Mercedes Ranchera%'));


SELECT cl.nombre, co.modelo FROM encargos e INNER JOIN coches co ON co.id = e.coche_id INNER JOIN clientes cl ON cl.id = e.cliente_id WHERE co.modelo = 'Mercedes Ranchera';