/*
13.Sacar la media de sueldos entre todos los vendedores por grupo
*/

SELECT v.grupo_id, CEIL(AVG(v.sueldo))AS 'Media de Sueldos', g.nombre FROM vendedores v, grupos g WHERE v.grupo_id =  g.id GROUP BY v.grupo_id;

SELECT CEIL(AVG(v.sueldo))AS 'Media de Sueldos', g.nombre FROM vendedores v INNER JOIN grupos g ON g.id = v.grupo_id GROUP BY v.grupo_id;