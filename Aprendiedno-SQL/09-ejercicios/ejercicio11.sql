/*
11. Visualizar todos los cargos y el numero de vendedores que hay en cada cargo
*/

SELECT cargo, COUNT(id) AS 'Cantidad de Vendedores' FROM vendedores GROUP BY cargo ORDER BY COUNT(id) desc;


