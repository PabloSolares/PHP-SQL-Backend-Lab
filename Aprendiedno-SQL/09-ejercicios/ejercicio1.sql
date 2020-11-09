/*
1. DISEÑAR Y CREAR UNA BASE DE DATOS DE UN CONCESIONARIO
*/

CREATE DATABASE IF NOT EXISTS concesionario;
USE concesionario;
CREATE TABLE coches (
id          int(10) auto_increment not null,
modelo      varchar(100) not null,
marca       varchar(50) not null,
precio      int(20) not null,
stock       int(255) not null,
CONSTRAINT pk_coches PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE grupos (
id          int(10) auto_increment not null,
nombre      varchar(100) not null,
ciudad      varchar(100),
CONSTRAINT pk_grupos PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE vendedores (
id          int(10) auto_increment not null,
grupo_id    int(10) not null,
nombre      varchar(100) not null,
apellidos   varchar(150),
cargo       varchar(50),
fecha_alta  date,
sueldo      float(20,2),
comision    float(10,2),
jefe        int(10),   
CONSTRAINT  fk_vendedor_grupo FOREIGN KEY(grupo_id) REFERENCES grupos(id),   
CONSTRAINT  pk_vendedores PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE clientes (
id          int(10) auto_increment not null,
vendedor_id int(10) ,
nombre      varchar(150) not null,
ciudad      varchar(50) ,
gastado     float(50,2) ,
fecha       date,
CONSTRAINT  pk_clientes PRIMARY KEY(id),
CONSTRAINT  fk_cliente_vendedor FOREIGN KEY(vendedor_id) REFERENCES vendedores(id)
)ENGINE=InnoDb;

CREATE TABLE encargos (
id          int(10) auto_increment not null,
cliente_id  int(10) not null,
coche_id    int(10) not null,
cantidad    int(100),
fecha       date ,
CONSTRAINT pk_encargos PRIMARY KEY(id),
CONSTRAINT  fk_encargo_cliente FOREIGN KEY(cliente_id) REFERENCES clientes(id),
CONSTRAINT  fk_encargo_coche FOREIGN KEY(coche_id) REFERENCES coches(id)
)ENGINE=InnoDb;


# INSERTS  #

# COCHES #
INSERT INTO coches VALUES(NULL, 'Renault Clio', 'Renault', 12000, 13);
INSERT INTO coches VALUES(NULL, 'Seat Panda', 'Seat', 10000, 10);
INSERT INTO coches VALUES(NULL, 'Mercedes Ranchera', 'Mercedes', 32000, 24);
INSERT INTO coches VALUES(NULL, 'Porche Cayene', 'Porche', 65000, 5);
INSERT INTO coches VALUES(NULL, 'Lambo Aventador', 'Lamborgini', 170000, 2);
INSERT INTO coches VALUES(NULL, 'Ferrari Spider', 'Ferrari', 245000, 80);

# GRUPOS #
INSERT INTO grupos VALUES(NULL, 'Vendedores A', 'Madrid');
INSERT INTO grupos VALUES(NULL, 'Vendedores B', 'Madrid');
INSERT INTO grupos VALUES(NULL, 'Directores Mecanicos', 'Madrid');
INSERT INTO grupos VALUES(NULL, 'Vendedores A', 'Barcelona');
INSERT INTO grupos VALUES(NULL, 'Vendedores B', 'Barcelona');
INSERT INTO grupos VALUES(NULL, 'Vendedores C', 'Valencia');
INSERT INTO grupos VALUES(NULL, 'Vendedores A', 'Bilbao');
INSERT INTO grupos VALUES(NULL, 'Vendedores B', 'Pamplona');
INSERT INTO grupos VALUES(NULL, 'Vendedores C', 'Santiago de Conpostela');

# VENDEDORES #
INSERT INTO vendedores VALUES(NULL, 1 ,  'David' ,'Lopez', 'Responsable de tienda',CURDATE(), 30000, 4,NULL );
INSERT INTO vendedores VALUES(NULL, 1 ,  'Fran' ,'Martinez', 'Ayudante de tienda',CURDATE(), 23000, 2,1 );
INSERT INTO vendedores VALUES(NULL, 2 ,  'Nelson' ,'Sanchez', 'Responsable de tienda',CURDATE(), 38000, 5,NULL );
INSERT INTO vendedores VALUES(NULL, 2 ,  'Jesus' ,'Lopez', 'Ayudante de tienda',CURDATE(), 12000, 6,3 );
INSERT INTO vendedores VALUES(NULL, 3 ,  'Victor' ,'Lopez', 'Mecanico Jefe',CURDATE(), 50000, 2,NULL );
INSERT INTO vendedores VALUES(NULL, 4 ,  'Antonio' ,'Lopez', 'Vendedor de recambios',CURDATE(), 13000, 8,NULL );
INSERT INTO vendedores VALUES(NULL, 5 ,  'Salvador' ,'Lopez', 'Vendedor Experto',CURDATE(), 60000, 2,NULL );
INSERT INTO vendedores VALUES(NULL, 6 ,  'Joaquin' ,'Lopez', 'Ejecutivo de cuentas',CURDATE(), 80000, 1,NULL );
INSERT INTO vendedores VALUES(NULL, 6 ,  'Luis' ,'Lopez', 'Ayudante de tienda',CURDATE(), 10000, 10,8 );

# CLIENTES #
INSERT INTO clientes VALUES(NULL, 1, 'Construcciones Diaz Inc', 'Alcobendas', 24000, CURDATE());
INSERT INTO clientes VALUES(NULL, 1, 'Fruteria Antonia Inc', 'Fuenlanbrada', 40000, CURDATE());
INSERT INTO clientes VALUES(NULL, 1, 'Imprenta Martinez Inc', 'Barcelona', 32000, CURDATE());
INSERT INTO clientes VALUES(NULL, 1, 'Jesus Colchones Inc', 'El Prat', 96000, CURDATE());
INSERT INTO clientes VALUES(NULL, 1, 'Bar Pepe Inc', 'Valencia', 170000, CURDATE());
INSERT INTO clientes VALUES(NULL, 1, 'Tienda Pc Inc', 'Murcia', 245000, CURDATE());


# ENCARGADOS #
INSERT INTO encargos VALUES(NULL, 1,1,2,CURDATE());
INSERT INTO encargos VALUES(NULL, 2, 2,4,CURDATE());
INSERT INTO encargos VALUES(NULL, 3, 3,1,CURDATE());
INSERT INTO encargos VALUES(NULL, 4, 3,3,CURDATE());
INSERT INTO encargos VALUES(NULL, 5, 5,1,CURDATE());
INSERT INTO encargos VALUES(NULL, 6, 6,1,CURDATE());



ALTER TABLE clientes ADD fecha date;










