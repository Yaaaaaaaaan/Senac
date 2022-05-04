create database testeBD;

use testeBD;

create table tbdepartamento (
	codigo_dpto int not null,
    nome_dpto varchar(255) not null,
    localizacao varchar(255),
    primary key(codigo_dpto));
    
    alter table tbdepartamento ADD column num_emp int;
    alter table tbdepartamento add column descricao varchar(255);
    alter table tbdepartamento drop column num_emp;
    
    insert into tbdepartamento (codigo_dpto, nome_dpto, localizacao,descricao) values (01,"Recursos Humanos", "Sala 5", "trata do pessoal da empresa");
    
    insert into tbdepartamento (codigo_dpto, nome_dpto, localizacao, descricao) Values (02,"producao", "Galpao A", "Linha de Produção da fábrica");
    
	insert into tbdepartamento (codigo_dpto, nome_dpto, localizacao, descricao) values (03, "almoxarifado" , "armazém", "Estoque da fábrica");
    
    insert into tbdepartamento (codigo_dpto, nome_dpto, localizacao, descricao) values (04, "Qualidade", "Sala 8", "Cuida da qualidade da produção.");
    
    insert into tbdepartamento (codigo_dpto, nome_dpto,localizacao, descricao) values (05, "Diretoria", "Sala 1", "Gestão de fábrica");
    
    insert into tbdepartamento (codigo_dpto, nome_dpto, localizacao,descricao) values (06, "Contabilidade", "Sala 4", "Cuida das finanças.");
    
    insert into tbdepartamento (codigo_dpto, nome_dpto, localizacao, descricao) values (07, "Logística", "Galpão lateral", "Distribuição.");
    
    delete from tbdepartamento where nome_dpto = "Recursos Humanos";
    
    select* from tbdepartamento; 									/* Exibir conteúdo da tabela. */
    
    select nome_dpto from tbdepartamento where codigo_dpto = 6;
    
    select localizacao from tbdepartamento where nome_dpto= "logística";
    
    select localizacao, descricao from tbdepartamento where nome_dpto ="Qualidade";
    
    update tbdepartamento SET localizacao= "Sala B" where nome_dpto= "contabilidade";
    
    
    create table tbempregado ( 										/* Criar tabela com chave estrangeira */
		matricula int auto_increment,
		nome varchar(80),
        email varchar(80),
        endereco varchar(80),
        dataNascimento date,
        codigo_dpto_alocacao int,
        primary key (matricula),
        foreign key (codigo_dpto_alocacao) references tbdepartamento (codigo_dpto));
        