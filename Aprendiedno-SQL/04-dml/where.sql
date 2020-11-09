# CONSULTA CON UNA CONDICION #

SELECT * FROM usuarios WHERE email = 'admin@admin.com';

/*
OPERADORES DE COMPARACION
Igual       =
Distinto    !
Menor que   <
Mayor que   >
Menor o igual <=
Mayor o igual >=
Entre       between A and B
En          in
Es nulo     is null
No nulo     is not null
Como        like
No es como  not like    
*/ 

/*
COMODINES:
Cualquier cantidad de caracteres: %
Un caracter desconocido: _

*/


# Ejemplos #

# 1. Mostrar nombres y apellidos de todos los usuarios reguistrdos en 2020 #
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) = 2020;  

# 2. Mostrar nombres y apellidos de todos los usuarios  que no se reguistrdos en 2020 #
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) != 2020 OR ISNULL(fecha);  

# 3. Mostrar el email de los usuarios cuyo apellido contenga la letra a y que su contraseña sea 1234 #
SELECT email FROM usuarios WHERE apellidos LIKE'%a%' AND password = '1234';

# 4. Sacar todos los registros de la tabla usuarios cuyo año sea par #
SELECT * FROM usuarios WHERE (YEAR(fecha)%2 = 0);

# 5. Sacar todos los registros  de la tabla usuarios cuyo nombre tenga mas de 5 letras y mostrar que se hayan registrado antes de 2020 y mostrar el nombre en mayusculas #
SELECT UPPER(nombre) AS 'Nombre', apellidos  FROM usuarios WHERE YEAR(fecha) = 2020 AND LENGTH(nombre > 5);

SELECT * FROM usuarios ORDER BY fecha DESC;

SELECT * FROM usuarios LIMIT 0,2;





