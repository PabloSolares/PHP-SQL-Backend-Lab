# MOSTRAR TODOS LOS REGISTROS / FILAS DE UNA TABLA #
SELECT email, nombre, apellidos FROM usuarios;

# MOSTRAR TODOS LOS CAMPOS #
SELECT * FROM usuarios;

# OPERADORES ARITMETICOS#
SELECT email, (7+7) AS 'OPERACION' FROM usuarios;


# FUNCIONES MATEMATICAS #
SELECT abs(7.88) AS 'OPERACION' FROM usuarios;
SELECT CEIL(7.34) AS 'OPERACION' FROM usuarios;
SELECT FLOOR(7.34) AS 'OPERACION' FROM usuarios;
SELECT pi() AS 'OPERACION' FROM usuarios;
SELECT RAND() AS 'OPERACION' FROM usuarios;
SELECT ROUND(7.91,1) AS 'OPERACION' FROM usuarios;
SELECT SQRT(7.91) AS 'OPERACION' FROM usuarios;
SELECT TRUNCATE(7.91, 4) AS 'OPERACION' FROM usuarios;
SELECT ROUND(id,2) AS 'OPERACION' FROM usuarios;


# FUNCIONES DE TEXTO#
SELECT UPPER(nombre) FROM usuarios;
SELECT LOWER(nombre) FROM usuarios;
SELECT CONCAT(nombre, ' ', apellidos) FROM usuarios;
SELECT UPPER(CONCAT(nombre, ' ', apellidos)) AS CONVERSION FROM usuarios;
SELECT LENGTH(CONCAT(nombre, ' ', apellidos)) AS CONVERSION FROM usuarios;
SELECT email ,LENGTH(CONCAT(nombre, ' ', apellidos)) AS CONVERSION FROM usuarios;
SELECT TRIM(CONCAT('       ',nombre, ' ', apellidos, '       ')) AS CONVERSION FROM usuarios;

# FUNCIONES DE FECHA #

SELECT email, fecha, CURDATE() AS 'Fecha Actual' FROM usuarios;
SELECT email, DATEDIFF(fecha, CURDATE()) AS 'Fecha Actual' FROM usuarios;
SELECT email, DAYNAME(fecha) AS 'Fecha Actual' FROM usuarios;
SELECT email, DAYOFMONTH(fecha) AS 'Fecha Actual' FROM usuarios;
SELECT email, DAYOFWEEK(fecha) AS 'Fecha Actual' FROM usuarios;
SELECT email, DAYOFYEAR(fecha) AS 'Fecha Actual' FROM usuarios;
SELECT email, MONTH(fecha) AS 'Fecha Actual' FROM usuarios;
SELECT email, YEAR(fecha) AS 'Fecha Actual' FROM usuarios;
SELECT email, DAY(fecha) AS 'Fecha Actual' FROM usuarios;
SELECT email, CURTIME() AS 'Fecha Actual' FROM usuarios;
SELECT email, SYSDATE() AS 'Fecha Actual' FROM usuarios;
SELECT email, DATE_FORMAT(fecha ,'%d-%M-%Y')  FROM usuarios;


# FUNCIONES GENERALES #
SELECT email, ISNULL(apellidos) FROM usuarios;  
SELECT email, STRCMP('HOLA', 'HOL1A') FROM usuarios;  
SELECT  VERSION() FROM usuarios;  
SELECT  USER() FROM usuarios;  
SELECT  DISTINCT USER() FROM usuarios;
SELECT  DISTINCT DATABASE() FROM usuarios;  
SELECT  IFNULL(apellidos, 'ESTE CAMPO ESTA VACIO') FROM usuarios;  
SELECT  EMAIL , IFNULL(apellidos, 'ESTE CAMPO ESTA VACIO') FROM usuarios;  


  


















