create database db_epp;
use db_epp;

create table tbl_epp(
	id int not null primary key auto_increment,
    descripcion varchar(255),
    stock int default 0,
    usuario int,
    fecha_creacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    marca_baja int
);

create table tbl_equipos (
	id int not null primary key auto_increment,
    descripcion varchar(255),
	stock int default 0,
    usuario int,
    fecha_creacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    marca_baja int
);

create table tbl_herramientas (
	id int not null primary key auto_increment,
    descripcion varchar(255),
	stock int default 0,
    usuario int,
    fecha_creacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    marca_baja int
);

create table tbl_materiales (
	id int not null primary key auto_increment,
    descripcion varchar(255),
	stock int default 0,
    usuario int,
    fecha_creacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    marca_baja int
);