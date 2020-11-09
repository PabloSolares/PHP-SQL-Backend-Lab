/*
21. Obtener los nombres y ciudades de los clientes con encargos de 3 unidades en adelante
*/

SELECT nombre , ciudad, e.cantidad FROM clientes c INNER JOIN encargos e ON c.id = e.cliente_id WHERE cantidad >= 3;
