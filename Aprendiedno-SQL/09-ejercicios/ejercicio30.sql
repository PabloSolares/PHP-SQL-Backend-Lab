/*
30. Mostrar los datos del vendedor con mas años en el consesionario
*/

SELECT * FROM vendedores ORDER BY fecha_alta ASC LIMIT 1;

# 30. Obtener los coches con mas unidades vendidas #

SELECT co.modelo, e.cantidad AS 'Unidades Vendidas' FROM coches co INNER JOIN encargos e ON e.coche_id = co.id GROUP BY 1 ORDER BY e.cantidad DESC; 
