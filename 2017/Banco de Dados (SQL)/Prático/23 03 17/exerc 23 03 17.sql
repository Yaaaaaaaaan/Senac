create database empresaBD;
use empresaBd;

	create table departamento (
		codigoDpto int auto_increment primary key, 
        descricao varchar(255) not null,
        nome varchar(255) not null
        );
        
	create table projeto (
		idProjeto int auto_increment primary key,
		dataInicio date not null,
		dataFim date,
		nome varchar(255) not null unique,
		codDptoFK int not null,
		foreign key (codDptoFK) references
		departamento(codigoDpto)
        );
    
    create table funcionario (
		matricula varchar(255) primary key,
		nome varchar(100) not null,
		endereco varchar(255) not null,
		dataNasc date not null,
		codDptoFK int Not null,
		foreign key (codDptoFK) references 
		departamento (codigoDpto)
		);
    
    create table ProjFunc (
		idProjFunc int auto_increment primary key,
		matriculaFK varchar(30) not null,
		idProjetoFK int Not null,
		foreign key (matriculaFK) references 
		funcionario (matricula),
		foreign key (idProjetoFK) references 
		projeto (idProjeto)
		);
    
	create table dependente (
		idDependente int auto_increment primary key,
		nome varchar(100 ) not null,
		dataNasc date not null,
		matriculaFK varchar(30) not null,
		foreign key (matriculaFK) references
		funcionario (matricula));