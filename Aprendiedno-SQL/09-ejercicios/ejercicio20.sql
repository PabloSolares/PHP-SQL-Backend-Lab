/*
20. Seleccionar el grupo en el que trabaja el vendedor con mayor salario y 
mostar el nombre del grupo 
*/

SELECT nombre FROM grupos WHERE id IN (SELECT grupo_id FROM vendedores  ORDER BY sueldo desc )LIMIT 1;

SELECT g.id , g.nombre, g.ciudad, v.sueldo FROM grupos g INNER JOIN vendedores v ON g.id = v.grupo_id ORDER BY sueldo DESC LIMIT 1;   