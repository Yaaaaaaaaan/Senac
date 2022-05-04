use teste_aula;

create table tbdepartamento (
	codigo_dpto INT NOT Null,
	nome_dpto varchar(255) not null,
	localizacao varchar(255),
	primary key (codigo_dpto));
 
desc tbdepartamento;

create table tbprodutos(
		codigo_prod int primary key auto_increment
        tbprodutos,
		nome_prod varchar(255) not null,
        quantidade int not null);

desc tbprodutos;

drop table tbprodutos;
show tables;

drop database teste_aula;
create database exercicio_aula;
use exercicio_aula;

create table aluno (
	matricula varchar(15),
	nome varchar(150) not null,
	anoNascimento date not null,
	telefone varchar(13),
	primary key (matricula));

create table veiculo (
	codigo int primary key auto_increment,
    nome varchar(255) not null,
    anoModelo int);
    
create table cliente (
	codigo int primary key auto_increment,
    nome varchar(255) not null,
    endereco varchar(255),
    percentualDesconto int);
    
    create table paciente (
		cpf varchar(11) primary key,
        nome varchar(255) not null,
        nomeDaMae varchar(255) not null,
        peso float,
        altura double);
        
        
        
create database teste_aula;

use teste_aula;

create table tbdepartamento(codigo_dpto int auto_increment primary key);
desc tbdepartamento;
alter table tbdepartamento add column num_emp int;
alter table tbdepartamento add column localizacao varchar(255);
alter table tbdepartamento add column nome varchar(255);
alter table tbdepartamento add column descricao varchar(255);

desc tbdepartamento;
insert into tbdepartamento (
		codigo_dpto,
		localizacao,
		nome,
		descricao)
		values(1, "Recursos Humanos",
        "Sala 5",
        "trata do pessoal da empresa");
			
select * from tbdepartamento;