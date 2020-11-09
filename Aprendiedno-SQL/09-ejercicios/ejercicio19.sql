/* 
19. Obtener los vendedores con 2 o mas clientes
*/

SELECT v.id, v.nombre FROM vendedores v INNER JOIN clientes cl ON  cl.vendedor_id =  v.id GROUP BY cl.vendedor_id HAVING COUNT(v.id) >= 2; 
