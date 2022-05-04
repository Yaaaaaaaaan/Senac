create database dbcdstore;
use dbcdstore;
create table adm(
    pin int(8) not null
	);

create table cliente(
	cod int AUTO_INCREMENT PRIMARY KEY,
    nome varchar(40) not null,
    sobrenome varchar(100) not null,
    bday date not null,
    email varchar(200) not null,
    cpf varchar(15) not null unique,
    rg varchar(13) not null unique,
    cep varchar(11) not null,
    num int not null,
    compl varchar(200),
    usua varchar(255) unique not null,
    senha varchar(50) not null
);

alter table cliente
                            add column cl_img LONGBLOB;
							
alter table adm
                            add column nick varchar(255) not null unique;