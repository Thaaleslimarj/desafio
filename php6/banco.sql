drop database aula6;
create database aula6;
use aula6;
create table cliente(
    idcliente int primary key auto_increment,
    nome varchar(255),
    email varchar(255),
    dtnasc date,
    cpf varchar(14) unique
);
create table endereco(
    idendereco int primary key auto_increment,
    endereco varchar(250),
    cep varchar(9),
    estado char(2),
    cidade varchar(40),
    id_cliente int,
    foreign key (id_cliente) references cliente(idcliente)
    on delete cascade
);