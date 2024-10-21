drop database aula8;

create database aula8;

use aula8;

create table artigos(
    idartigo int primary key auto_increment,
    titulo varchar(30),
    autor varchar(30),
    foto varchar(30),
    artigo text
);

truncate artigos; #  apaga todos os registros E ZERA O ID
delete from artigos; # apaga todos os registros, mas mantem o id

# varchat -> 255 caracteres
# text -> 4mil caracteres (+-4kb)
# longtext -> 4 milhoes (+-4mb)
