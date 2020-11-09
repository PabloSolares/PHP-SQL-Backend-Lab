/*
14. Visualizar las unidades totales vendidas de cada cohe a cada cliente. 
Mostrando el nombre del producto, numero de cliente y la suma de unidades
*/

SELECT modelo AS 'Coche', cl.nombre AS 'Cliente', SUM(e.cantidad) AS 'Cantidad' FROM encargos e INNER JOIN coches cO ON cO.id = e.coche_id INNER JOIN clientes cl ON cl.id = e.cliente_id GROUP BY e.coche_id, e.cliente_id; 