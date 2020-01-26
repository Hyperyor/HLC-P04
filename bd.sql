CREATE TABLE empresas (
    nombre varchar(100) NOT NULL,
    PRIMARY KEY (nombre)   
);

CREATE TABLE juegos(
    titulo VARCHAR(100) NOT NULL,
    portada VARCHAR(100) NOT NULL,
    lanzamiento INT,
    empresa VARCHAR(100) NOT NULL,
    PRIMARY KEY(titulo),
    FOREIGN KEY(empresa) REFERENCES empresas(nombre)
);

insert into empresas values('sony');
insert into empresas values('microsoft');
insert into empresas values('nintendo');

insert into juegos values('God of War', 'assets/imagenes/godofwar.jpg', 2018,'sony');
insert into juegos values('Mario', 'assets/imagenes/mario.jpg', 2017,'nintendo');
insert into juegos values('The Legend of Zelda', 'assets/imagenes/zelda.jpg', 2016,'nintendo');
insert into juegos values('Uncharted 4', 'assets/imagenes/uncharted.jpg', 2015,'sony');
insert into juegos values('Halo 4', 'assets/imagenes/halo.jpg', 2012,'microsoft');
