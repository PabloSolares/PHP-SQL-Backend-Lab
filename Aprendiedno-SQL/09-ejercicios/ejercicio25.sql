/*
25. Obtener una lista de los nombres de los clientes con el importe 
de sus encargos acumulado
*/

SELECT nombre, SUM(precio*cantidad) AS "IMPORTE" FROM clientes cl INNER JOIN encargos e ON cl.id = e.cliente_id INNER JOIN coches co ON e.coche_id = co.id GROUP BY cl.nombre ORDER BY SUM(precio*cantidad) DESC;

