drop database museuBD;
create database museuBD;
	use museuBD;
		create table Salao(
			ID_salao int primary key auto_increment,
			Andar int not null           
		);
        
			create table Autor(
				ID_Autor int primary key auto_increment,
                Nome varchar(255) not null,
                Nacionalidade varchar(255) not null
			);
            
				create table Obra(
					Id_obra int primary key auto_increment,
					Titulo varchar(255) not null,
                    Ano date not null,
                    Tipo varchar(255) not null,
                    Obra varchar(255) not null,
                    ID_AutorFK int not null,
                    ID_SalaoFK int not null,
                    foreign key (ID_AutorFK) references Autor (ID_Autor),
                    foreign key (ID_SalaoFK) references Salao (ID_Salao)
                    
				);
                
					create table Funcionario(
						Matricula int primary key auto_increment,
                        Nome varchar(255) not null,
                        Salario double not null,
                        Cargo varchar(255) not null,
                        CPF varchar(20) not null unique,
                        ID_SalaoFK int not null,
                        Foreign key (ID_SalaoFK) references salao (ID_Salao)
                        
                        
					);
					                    
						desc Salao;
							Insert into Salao(
                            ID_Salao,
                            Andar
                            )
								values(1, 
									1
								);
                                
							desc Autor;
								insert into Autor(
                                ID_Autor,
								Nome,
								Nacionalidade
                                )
									values(1,
                                    "Frida_Kahlo",
                                    "coyoacan");
                                    
                                    
                        
                        DESC Funcionario;
							INSERT INTO Funcionario (
                            Matricula,
                            Nome,
                            Salario,
                            Cargo,
                            CPF,
                            ID_SalaoFK)
								values (1, 
									"Julio Cesar Da Silva Barros",
									"8400.36", 
									"Administrador Geral",
									"12185635247",
									1
								);
                            
                            alter table Funcionario
                            add column Idade INT;
                            
                                                      
                            drop table Obra;
                            
                            select * from Funcionario;
							
                            select Nome,Salario from Funcionario;
                            
                            select Nome, Nacionalidade from Autor;
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
							