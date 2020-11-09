/*
16. Obtener listado de clientes atendidos por el vendedor 'David Lopez'
*/

SELECT * FROM clientes WHERE vendedor_id IN (SELECT id FROM vendedores WHERE nombre = 'David' AND apellidos = 'Lopez'); 

SELECT * FROM clientes c INNER JOIN vendedores v ON c.vendedor_id = v.id WHERE v.nombre = 'David' AND v.apellidos = 'Lopez';