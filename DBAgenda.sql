create database agenda;
use agenda;
CREATE TABLE contacto (
    id int not null auto_increment primary key,
    nombre varchar(255),
    apellido varchar(255),
    telefonoMovil varchar (255),
    telefonoCasa varchar (255),
    correo varchar (255), 
    direccion varchar(255),
    ciudad varchar(255)
);