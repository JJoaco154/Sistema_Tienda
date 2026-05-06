create database Tienda;
use tienda;
drop database Tienda;

create table usuario(
    id int not null primary key auto_increment,
    nombre varchar(30),
    email varchar(30),
    contraseña varchar(30)
);

create table producto(
    id int not null primary key auto_increment,
    nombre varchar(30),
    precio float default 0.0
);

-- esta es la tabla general que guarda al usuario 
create table carrito(
    id int not null primary key auto_increment,
    id_usuario int not null,
    total float default 0.0,
    foreign key (id_usuario) references Usuario(id)
);

-- esta es la tabla que guarda el usuario (que seria mas bien usurario en carrito y todos los productos del carrito)
CREATE TABLE Carrito_Productos (
    id_carrito_producto int not null primary key auto_increment,
    id_carrito int not null,
    id_producto int not null,
    cantidad int,
    foreign key (id_carrito) references Carrito(id),
    foreign key (id_producto) references Producto(id)
);

create table pedido(
    id int not null primary key auto_increment,
    dire_envio varchar(15),
    fecha_pedido date,
    id_carrito_p int,
    foreign key (id_carrito_p) references Carrito_Productos(id_carrito_producto)
);

select * from usuario;