/*
28. Mostrar todos los vendedores y el numero de clientes, 
se deben mostrar tengan o no clientes
*/

SELECT v.nombre, v.apellidos, COUNT(cl.id) FROM vendedores v LEFT JOIN clientes cl ON cl.vendedor_id = v.id GROUP BY v.id ORDER BY COUNT(cl.id) DESC;
