create database registros;
use registros;
set sql_mode='';

create table usuarios(
	id int not null auto_increment primary key,
	nombre varchar(50),
	telefono int(50)
);