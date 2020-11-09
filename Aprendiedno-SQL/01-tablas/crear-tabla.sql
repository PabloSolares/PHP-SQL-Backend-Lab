/*
int(n* numero de cifras) ENTERO
integer(n* numero de cifras) ENTERO
varchar(n* caracteres) STRING
char(n* caracteress) string 
float(cifras, n*decimales) decimal
date, time, timestamp

//Stings mas grandes
text 65mil  caracteres
mediumtext 16 millones  caracteres
longtext 4 billones de caracteres


//Enteros grandes
MEDIUMINT
BIGINT
*/

/*
Crear Tabla

*/

CREATE TABLE usuarios(
id          int(11) auto_increment not null,
nombre      varchar(100) not null,
apellidos   varchar(255) default'hola que tal',
email       varchar(100) not null,
password    varchar(255),
CONSTRAINT pk_usuarios PRIMARY KEY(id) 
);

