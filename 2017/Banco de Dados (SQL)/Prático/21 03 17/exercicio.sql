show databases;
use testeBD;
show tables;
desc tbdepartamento;

	create table tbempregado (
    
		matricula INT AUTO_INCREMENT,
        nome varchar(50),
        email varchar(50),
        endereco varchar(50),
        dataNascimento DATE,
        codigo_dpto_alocacao INT,
        Primary key (matricula),
        foreign key (codigo_dpto_alocacao) references
        tbdepartamento (codigo_dpto));


	create table tbcliente (cod_cli INT,
        nome_cliente VArchar(50),
        primary key (cod_cli));
        
        
	Create table tbproduto (cod_prod INT,
        nome_produto Varchar(50), 
        primary key (cod_prod));
        
        
	create table tcompra(cod_cli_compra INT,
        cod_prod_compra INT,
        foreign key (cod_cli_compra) references tbcliente(cod_cli),
        foreign key (cod_prod_compra) references tbproduto(cod_prod));
        
        show tables;
       desc tcompra ;
       
       lock tables tbproduto write, tbcliente write, tcompra write;
			
			alter table tcompra drop foreign key tcompra_ibfk_1;
            alter table tcompra drop foreign key tcompra_ibfk_2;
            alter table tcompra add primary key (cod_cli_compra, cod_prod_compra);
            alter table tcompra add foreign key ();
            alter table tcompra add foreign key ();