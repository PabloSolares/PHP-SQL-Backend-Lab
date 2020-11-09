/*
15. Mostar los clientes que mas pedidos han hecho y mostrar cuantos hicieron
*/

SELECT cl.nombre AS 'Cliente', e.cantidad FROM encargos e INNER JOIN clientes cl ON cl.id = e.cliente_id ORDER BY cantidad DESC LIMIT 4;