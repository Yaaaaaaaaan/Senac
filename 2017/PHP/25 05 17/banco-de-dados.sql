create database cliente;
use cliente;
create table cliente(
    matricula int PRIMARY KEY AUTO_INCREMENT,
    nome varchar(255) not null,
    tel varchar(10) not null);