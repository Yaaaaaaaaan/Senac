create database teste;

	create table aluno (
		mat int not null primary key,
		nome varchar(255) not null,
		cpf int not null unique
	)