drop database aula7;

create database aula7;

use aula7;

create table usuario(
    idusuario int primary key auto_increment,
    nome varchar(50),
    email varchar(50),
    dtnasc date,
    login varchar(30) unique,
    senha varchar(32)
);

