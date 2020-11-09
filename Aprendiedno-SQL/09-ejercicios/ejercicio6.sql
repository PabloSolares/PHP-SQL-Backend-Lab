/*
6. Visualizar el nombre y los apellidos de los vendedores en una misma columna, 
su fecha de registro y el dia de la semana se registraron
*/

SELECT CONCAT(nombre, ' ', apellidos) AS 'Vendedor', fecha_alta, DAYNAME(fecha_alta) AS 'Dia del mes' FROM vendedores; 