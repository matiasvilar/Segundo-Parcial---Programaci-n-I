CREATE DATABASE db;
USE DATABASE db;
CREATE TABLE usuario(
    id int primary key auto_increment,
    username varchar(50) unique,
    complete_name varchar(50),
    pasword varchar(255)
);

CREATE TABLE publicacion (
    autor varchar(100) NOT NULL,
    texto text,
    fecha DATETIME,
    PRIMARY KEY (autor,fecha)
);