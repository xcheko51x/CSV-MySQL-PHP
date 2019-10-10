create database pruebas;

use pruebas;

create table usuarios(
	idUsuario int primary key auto_increment,
	nombre varchar(50) not null,
	telefono varchar(15) not null,
	email varchar(30) not null,
	usuario varchar(50) not null,
	contrasena varchar(15) not null
);

insert into usuarios (nombre, telefono, email, usuario, contrasena) values('Ana L', '123456789', 'ana@mail.com', 'ana', 'ana');