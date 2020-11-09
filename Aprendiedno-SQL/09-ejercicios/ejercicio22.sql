/*
22. Mostrar listado de clientes (numero de cliente y el nombre)
mostrar tambien el numero de vendedor y su nombre
*/

SELECT c.id AS 'Numero de Cliente', c.nombre AS 'Nombre del Cliente',  v.id AS 'Numero de Vendedor', CONCAT(v.nombre, ' ', v.apellidos) AS 'Vendedor' FROM clientes c INNER JOIN vendedores v ON v.id = c.vendedor_id;

