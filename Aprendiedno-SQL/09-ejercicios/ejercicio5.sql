/*
5. Mostrar todos los vendedores con su nombre y el numero de dias que llevan en el consesionario
*/


SELECT nombre , DATEDIFF( CURDATE(), fecha_alta) AS 'Diferencia' FROM vendedores;

