<!doctype html>
<html lang="pt-Br">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/handworking.css" rel="stylesheet">
<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">

<!-- Inline -->

<style>

			#foto1{ width:100%; height:330px; background-image:url(img/esc.png);background-repeat:none; float:left; margin-top:5px;}
			#foto1 span {display:none;color:#eee; width:100%; height:330px; background-image:url(img/fd_efeito_foto.png); background-repeat:repeat;}
			#foto1 span img{ float:right; }
			#foto1:hover span {display: block; cursor:pointer;}
			
			/*Inicia a foto-rolagem*/
			#vgeral{
			  height: 100%;
			  margin: 0;
			  font: 400 15px/1.8 "Lato", sans-serif;
				color: #777;}
			 
			.bgimg-1, .bgimg-2, .bgimg-3, .bgimg-4, .bgimg-5 {
			  position: relative;
			  opacity: 0.6;
			  background-attachment: fixed;
			  background-position: center;
			  background-repeat: no-repeat;
			  background-size: cover;

			}
			.bgimg-1 {
			  background-image:url("img/foto1.jpg");
			  min-height: 500px;
			}
			.bgimg-2 {
			  background-image:url("img/foto2.jpg");
			  min-height: 500px;
			}

			.bgimg-3 {
			  background-image: url("img/foto1.jpg");
			  min-height: 400px;
			}
			
			.bgimg-4 {
			  background-image: url("img/foto2.jpg");
			  min-height: 400px;
			}
			
					/* footer */
			.bgimg-5 {
			  background-image: url("img/esc.jpg");
			  min-height: 200px;
			}
			
			.caption {
			  position: absolute;
			  left: 0;
			  top: 50%;
			  width: 100%;
			  text-align: center;
			  color: #000;
			}

			.caption span.border {
			  background-color: #111;
			  color: #fff;
			  padding: 18px;
			  font-size: 25px;
			  letter-spacing: 10px;
			}

			h3 {
			  letter-spacing: 5px;
			  text-transform: uppercase;
			  font: 20px "Lato", sans-serif;
			  color: #ddd;
			}


			.footer {
				position: fixed;
				height: 22px;
				bottom: 0;
				width: 100%;
				font-size: auto;
				color:#1E1E1E;
				background-color:rgba(194,194,194,0.75);
			}	
			
			.coisinha {
			  height: 100%;
			  padding:0px 5px 5px 5px;
			  margin-bottom: 20px;
			  background-image:linear-gradient(90deg,RGBA(255, 255, 255, 0.8),RGBA(245,245,245,0.8)) ;
			  border-right:1px solid #e3e3e3;
			  border-top:1px solid #e3e3e3;
			  border-bottom:1px solid #e3e3e3;
			  border-radius:0px 10px 10px 0px;
			  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
					  box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
						overflow:hidden;
			}
			
			
			*/ Menu vertical /*
			
			#menu-vertical{
			position:fixed;
			z-index:999;
			left:0%;
			right: 0%;
			top:0;
			overflow:hidden;
			}
			
						*/ Menu maujor /*


			/* regra para o clear float */
			.cf:before,
			.cf:after {content: " ";display: table;}
			.cf:after {clear: both;}
			.cf {*zoom: 0;}
									
									
				#lateral {
					-moz-transition: all 0.5s ease;
					-webkit-transition: all 0.5s ease;
					-o-transition: all 0.5s ease;
					transition: all 0.5s ease;
					margin-left:70px;
					height:250px;
					overflow:hidden;
					width:270px; 
					position:fixed;
					top:100px;
					left:-315px;
				}
				#lateral:hover, #lateral:focus,  #lateral:active  {
					-moz-transform: translate(210px, 0);
					-webkit-transform: translate(210px, 0);
					-o-transform: translate(210px, 0);
					transform: translate(210px, 0);
					padding-right:0;
				}				
</style>

<!-- iconawesome -->
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

	<meta charset="utf-8">
	<title>Painel de controle IE-E</title>
	<!-- Ícone -->
	<LINK REL="SHORTCUT ICON" href="img/favicon.gif">
	<?php
		session_start();
		include "conexao.php";
		if(isset($_SESSION['usuario'])){	
			
		}
		else{
			header("location:index.php");
		};
		
													// Cadastro aluno
		
		if(isset($_POST["cada"])){
			$nomea=$_REQUEST["nomea"];
			$telefonea=$_REQUEST["telefonea"];
			$cpfa=$_REQUEST["cpfa"];
			$enda=$_REQUEST["enda"];
			$resultado_cada=mysqli_query($conecta,"insert into aluno (nome_aluno,telefone_aluno,cpf_aluno,endereco_aluno) values ('$nomea', '$telefonea', '$cpfa', '$enda')")or die(mysqli_error());
			if($resultado_cada){
				$_SESSION["nome_aluno"]=$nomea;
				$_SESSION["telefone_aluno"]=$telefonea;
				$_SESSION["cpf_aluno"]=$cpfa;
				$_SESSION["endereco_aluno"]=$enda;
			}
			else{
				echo "OPS, há algo errado ai!";
			}
		}
		
													// CADASTRO MATRÍCULA ALUNO
									
		if(isset($_POST["matriculad"])){
		$COD_turmaFK=$_REQUEST["COD_turmaFK"];
		$idaluno=$_REQUEST["idaluno"];
		$datacad=$_REQUEST["datacad"];
		$resultado_matriculad=mysqli_query($conecta,"insert into matricula (datacad, COD_turmaFK, ID_alunoFK) values ('$datacad', '$COD_turmaFK', '$idaluno')")or die(mysqli_error());	
			if($resultado_matriculad){
				$_SESSION["datacad"]=$datacad;
				$_SESSION["COD_turmaFK"]=$COD_turmaFK;
				$_SESSION["ID_alunoFK"]=$idaluno;
			}
			else{
				echo "há algo de errrado ai!";
			}
				
		}
													// Cadastro funcionário
		
		if (isset($_POST["cadf"])){
			$nomef=$_REQUEST["nomef"];
			$telefonef=$_REQUEST["telefonef"];
			$cargof=$_REQUEST["cargof"];
			$cpff=$_REQUEST["cpff"];
			$resultado_cadf=mysqli_query($conecta,"insert into funcionario (nome_func,telefone_func,cargo,cpf) values ('$nomef', '$telefonef', '$cargof', '$cpff')")or die(mysqli_error());
			if($resultado_cadf){
				$_SESSION["nome_func"]=$nomef;
				$_SESSION["telefone_func"]=$telefonef;
				$_SESSION["cargo"]=$cargof;
				$_SESSION["cpf"]=$cpff;
			}
			else{
				echo "há algo errado ai!";
			}
		}
		
													// Cadastro professor
		
		if (isset($_POST["cadp"]))
		{
		$nomep=$_REQUEST["nomep"];
		$telefonep=$_REQUEST["telefonep"];
		$codip=$_REQUEST["codip"];
		$cpfp=$_REQUEST["cpfp"];
		$residenciap=$_REQUEST["residenciap"];
		$resultado_cadp=mysqli_query($conecta,"insert into professor (nome_professor,telefone_professor,residencia,cpf,licenciatura) values ('$nomep','$telefonep','$residenciap','$codip','$cpfp')") or die(mysqli_error());
		if($resultado_cadp){
			$_SESSION["nome_professor"]=$nomep;
			$_SESSION["telefone_professor"]=$telefonep;
			$_SESSION["licenciatura"]=$codip;
			$_SESSION["residencia"]=$residenciap;
			$_SESSION["cpf"]=$cpfp;
		
		}else{
			echo "Algo deu errado.";
		}
		
		
		}
													// CADASTRO MATÉRIA Professor
													
		if (isset($_POST["admat"])){
			$nome_disciplina=["nome_disciplina"];
			$COD_professorFK=["COD_professorFK"];
			$COD_turmaFK=["COD_turmaFK"];
			$resultado_admat=mysqli_query($conecta,"insert into disciplina (nome_disciplina, COD_professorFK, COD_turmaFK) values ('$nome_disciplina', '$COD_professorFK', '$COD_turmaFK')")or die (mysqli_error());
			if($resultado_admat){
				$_SESSION["nome_disciplina"]=$nome_disciplina;
				$_SESSION["COD_professorFK"]=$COD_professorFK;
				$_SESSION["COD_turmaFK"]=$COD_turmaFK;
			}else {echo "Tem parada errada aí. RSRSRS";}
		}
		
		
													// Cadastro usuários	
		
		if (isset($_POST["salvar"]))
		{
			
			$nick=$_REQUEST["nick"];
			$senha=$_REQUEST["senha"];
			$ranking=$_REQUEST["ranking"];
			$resultado_ins=mysqli_query($conecta,"insert into usuario (nick,senha,ranking) values ('$nick','$senha','$ranking')") or die(mysqli_error());
			
			if($resultado_ins)
			{
				$_SESSION["nick"]=$nick;
				$_SESSION["senha"]=$senha;
				$_SESSION["ranking"]=$ranking;
				echo"registrado";
			}
			else
			{
				echo"alguma coisa deu errado";
			}
			
		}
		
													// Exibir pedidos de ajuda(mensagens)
			if(isset($_POST["atualizarpedidos"])){	
		$pedidos=mysqli_query($conecta,"select * from ajuda order by ID_comentario");
		$linha=mysqli_fetch_array($pedidos);
			}
			
													// Apagar pedidos de ajuda (Mensagens)
													// FALTA FAZER
		if(isset($_POST['apagarregistros'])){
			$idcomentario=$_GET['ID_comentario'];
			$mensagem=$_GET['mensagem'];
			$nickmsg=$_GET['nickmsg'];
		$deleta=mysqli_query($conecta,"delete from ajuda where ID_comentario");
		$linha=$deleta;
		}

		error_reporting(E_ALL & ~ E_NOTICE);

													// COMBOBOX (SELECT) ALUNO
	
		include "conexao.php";
		$combo1="select * from aluno order by ID_aluno";
		$combusca1 = mysqli_query($conecta,$combo1);
		
													// COMBOBOX (SELECT) TURMA
	
		include "conexao.php";
		$combo2="select * from turma order by COD_turma";
		$combusca2 = mysqli_query($conecta,$combo2);
		
													//COMBOBOX (SELECT) MATÉRIA(PROFESSOR)
		
		include "conexao.php";
		$combo3="select * from professor order by COD_professor";
		$combusca3 = mysqli_query($conecta,$combo3);
		
		
												// COMBOBOX (SELECT) TURMA(PROFESSOR)
	
		include "conexao.php";
		$combo4="select * from turma order by COD_turma";
		$combusca4 = mysqli_query($conecta,$combo4);
													// CHECKBOX RESOLVIDO(MEC) MENSAGENS
													// FALTA FAZER
													
													
													
													// RELATÓRIO DE ALUNOS CADASTRADOS
													
		if(isset($_GET["exibiralunos"])){	
		$alunos=mysqli_query($conecta,"select * from aluno order by ID_aluno");
		$linha=mysqli_fetch_array($alunos);
		}
		
			
													// RELATÓRIO DE PROFESSORES CADASTRADOS
													
		if(isset($_GET["exibirprofessores"])){	
		$professor=mysqli_query($conecta,"select * from professor order by COD_professor");
		$linha=mysqli_fetch_array($professor);
		}
		
							
													// RELATÓRIO DE FONCIONÁRIOS CADASTRADOS
													
		if(isset($_GET["exibirfuncionarios"])){	
		$funcionario=mysqli_query($conecta,"select * from funcionario order by COD_func");
		$linha=mysqli_fetch_array($funcionario);
		}
			
			
													// RELATÓRIO DE USUÁRIOS CADASTRADOS
													
		if(isset($_GET["exibirusuarios"])){	
		$usuario=mysqli_query($conecta,"select * from usuario order by ID_usuario");
		$linha=mysqli_fetch_array($usuario);
		}
		
	?>
		
		
</head>

	<body>
		<nav class="navbar navbar-default navbar-fixed-top">
		  <div class="container-fluid">
			<div class="navbar-header">
			  <a class="navbar-brand" href="#">
				<img src="img/logou.gif" href="index.php" style="width:100%;">
			  </a>
			</div>
			<ul class="nav nav-tabs" style="padding-top:5px;">
			
		  <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
			
		  <li role="presentation" class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
			 <i class="fa fa-wrench" aria-hidden="true"></i> Ferramentas
			</a>
			<ul class="dropdown-menu">
			<li><a href="#adicionar" aria-controls="adicionar" role="tab" data-toggle="tab"><i class="fa fa-user-plus" aria-hidden="true"></i> Acrescentar</a></li>
			
			 <li><a href="#insuser" aria-controls="insuser" role="tab" data-toggle="tab"><i class="fa fa-code" aria-hidden="true"></i> Inserir usuários</a></li>
			 <li><a href="#msgs" aria-controls="msgs" role="tab" data-toggle="tab"><i class="fa fa-envelope-o" aria-hidden="true"></i> Pedidos de ajuda</a></li>
			<li role="presentation"><a href="#rel" aria-controls="rel" role="tab" data-toggle="tab"><i class="fa fa-archive" aria-hidden="true"></i> Relatórios</a></li>
			</ul>
		  </li> 
				
				
					<li role="presentation" class="dropdown navbar-right">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
							<i class="fa fa-info-circle" aria-hidden="true"></i> Informações
						</a>
							<ul class="dropdown-menu">
								<li role="presentation">
									<a href="#">
											<?php
												$sql="select * from usuario where nick='$nick'";
												$resultado=mysqli_query($conecta,$sql);
												$linha=mysqli_fetch_assoc($resultado);
												if(isset($_SESSION['usuario']))	
													echo "<i class='fa fa-user-secret' aria-hidden='true'></i> Bem vindo, ".$_SESSION['usuario'];
													
												
												
												
											?></a>
										<li><a href="#confuser" aria-controls="confuser" role="tab" data-toggle="tab"><i class="fa fa-cogs" aria-hidden="true"></i> Configurações da conta</a></li>
									<li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Sair</a></li>
								</li>
							</ul>
					</li>
					
						
							
								
							
						
						
			</ul>
		  </div>
		</nav>
		<!-- Termina barra de navegação -->
		
		<div class="container-fluid">
			
			
					
						
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="home" style="padding-top:50px;">
					<div class="row">
					<div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
						<div class="well" style="color:#333">
							<div class="row">
									<center>
										O que rolou nessa nova atualização :<br><br>
										
										Fixação de Bugs;<br>
										Fixação de Bugs;<br>
										Fixação de Bugs;<br>
										criação de novas páginas;<br>
										criação de novas páginas;<br>
										Reforço na segurança de login;<br>
										Reforço na segurança de login;<br>
										Atualização de certificações de segurança;<br>
										Atualização de certificações de segurança;<br>
										Atualização de tabelas no Banco de dados;<br>
										Atualização de tabelas no Banco de dados;<br>
									</center>
									
							</div>
								<div class="well">
									<div class="row"><h1><center>Version Release 0.4.11 </center></h1></div>
								</div>
						</div>
					</div>
					</div>
				</div>

				<div role="tabpanel" class="tab-pane" id="insuser">
					<div class="row">
				
		
								<div class="bgimg-1" id="vgeral">
									<div class="caption">
										<span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;text-shadow: 2px 2px 8px #000000;"><i class="fa fa-plus fa-2x" style="color:#f7f7f7;text-shadow: 2px 2px 8px #000000;" aria-hidden="true"></i> Usuários</span>
									</div>
								</div>
						
						
							<div style="position:relative;">
								<div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
									<div class="row"><div class="col-md-2"></div>
										<div class="col-md-8">
											<div class="well">
												<form name="teste" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" style="padding-bottom:35px; ">
								
													<p><label for="nick">Nick</label><input class="form-control" type="text" value="<?php echo $nick;?>" placeholder="Insira o nick de usuário aqui." name="nick"></p>
														<p><label for="senha">Senha</label><input class="form-control" type="password" value="<?php echo $senha;?>" placeholder="Insira a senha aqui." name="senha"></p>
														<p><select class="form-control" name="ranking">
															<option value=1>Aluno</option>
															<option value=2>Professor</option>
															<option value=3>Gestor</option>
															<option value=4>Administrador</option>
														</select>
														</p>
												
										
															<p><button type="button submit" name="excluir" class="btn btn-danger pull-right" style="margin-left: 5px;"><i class="fa fa-trash-o" aria-hidden="true"></i> Excluir</button></p>
															
																<p><button type="button submit" name="salvar" class="btn btn-success pull-right" style="margin-left: 5px;"> Salvar</button></p>
																	
														
											</div>
										</div>
									</div>
								</div>
							</div>
							
						<!-- fim primeira página -->
						
					</div>
				</div>
																						
				<div role="tabpanel" class="tab-pane" id="rel"> 
					<div class="row">
						
						<style type="text/css">
							#menu-vertical{
							  position:fixed;
							  z-index:999; 
							  top:25px;
							  overflow:hidden;
							  padding:0px;
							  
							  
							}
						</style>
 
							<div id="menu-vertical">
								<div id="menu">
									<div id="lateral"> 
										<div class="row">
											<div class="col-md-10">
												<div class="coisinha" style="padding-left:50px;padding-right:10px; padding-top:10px; padding-bottom:10px">
													<a href="#alc"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Alunos cad</a><br>
													<a href="#alm"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Alunos mat</a>
													<hr>
													<a href="#pgm"><i class="fa fa-file-text-o" aria-hidden="true"></i> Finanças (BREVE)</a><br>
													<a href="#prm"><i class="fa fa-coffee" aria-hidden="true"></i> Professores</a>
													
													<hr>
													<a href="#fum"><i class="fa fa-briefcase" aria-hidden="true"></i> Funcionários</a><br>
													<a href="#uac"><i class="fa fa-users" aria-hidden="true"></i> Usuários</a>
													
												</div>
											</div>
											<div class="col-md-2"><i class="fa fa-angle-double-right fa-2x" aria-hidden="true" style="padding-top:90px; margin-right:10px; color:#1476BC"></i></div>
										</div>
									
									</div>	
								</div>
							</div>
 
					
						
							
						
						
						
								<div class="bgimg-1" id="alc">
									<div class="caption">
										<span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;text-shadow: 2px 2px 8px #000000;">Alunos cadastrados</span>
									</div>
								</div>
								
							<div style="position:relative;">
								<div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
									<div class="row"><div class="col-md-2"></div>
										<div 0class="col-md-8">
											<div class="well" style="background:RGBA(255, 255, 255, 0.1);">
												<form>
													<!-- Exibe relatório pedido (código PHP)-->
												
												<form>
													<?php

														$sqlc =(mysqli_query($conecta,"SELECT * FROM aluno ORDER BY ID_aluno desc"));
																while( $alunos = mysqli_fetch_array($sqlc)){
																	
															?>
															<div class="well" style="background:RGBA(255, 255, 255, 0.1);">
															<p><label style="color:RGBA(245,245,245,1.0)"><i class="fa fa-file-text-o" aria-hidden="true"></i> ID do aluno</label>
															<input class="form-control" type="text" readonly="true" style="color:black" value="<?php echo $alunos['ID_aluno']; ?>"> </input></p>
															
															<p><label style="color:RGBA(245,245,245,1.0)"><i class="fa fa-file-text-o" aria-hidden="true"></i> Nome do aluno</label>
															<input class="form-control" type="text" readonly="true" style="color:black" value="<?php echo $alunos['nome_aluno']; ?>"> </input></p>
															
															<p><label style="color:RGBA(245,245,245,1.0)"><i class="fa fa-file-text-o" aria-hidden="true"></i> CPF do aluno</label>
															<input class="form-control" type="text" readonly="true" rows="8" style="color:black"value="<?php echo $alunos['cpf_aluno']; ?>"></input></p>
															
															<p><label style="color:RGBA(245,245,245,1.0)"><i class="fa fa-file-text-o" aria-hidden="true"></i> Telefone do aluno</label>
															<input class="form-control" type="text" readonly="true" rows="8" style="color:black"value="<?php echo $alunos['telefone_aluno']; ?>"></input></p>
															
															<p><label style="color:RGBA(245,245,245,1.0)"><i class="fa fa-file-text-o" aria-hidden="true"></i> Endereço do aluno</label>
															<input class="form-control" type="text" readonly="true" rows="8" style="color:black"value="<?php echo $alunos['endereco_aluno']; ?>"></input></p>
															</div>
																<?php } ?> 	
															
															
											
												</form>
													<p><button type="button submit" name="buscar" class="btn btn-success pull-right" style="margin-left: 5px;"><i class="fa fa-search" aria-hidden="true"></i> Buscar</button></p>
												</form><br><br>
											</div>
										
										
															
											
										</div>
									</div>
								</div>
							</div>
								
								<div class="bgimg-1" id="alm">
									<div class="caption">
										<span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;text-shadow: 2px 2px 8px #000000;">Alunos matriculados</span>
									</div>
								</div>
								
							<div style="position:relative;">
								<div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
									<div class="row"><div class="col-md-2"></div>
										<div 0class="col-md-8">
											<div class="well" style="background:RGBA(255, 255, 255, 0.1);padding-bottom:50px;">
												<form>
													<!-- Exibe relatório pedido (código PHP)-->
												
												<form>
													<?php 
														$sqlm =(mysqli_query($conecta,"SELECT * FROM matricula ORDER BY MAT_aluno desc"));
																while( $matricula = mysqli_fetch_array($sqlm)){
													?>
													
														<div class="well" style="background:RGBA(255, 255, 255, 0.1);">
														
															<p><label style="color:RGBA(245,245,245,1.0)"><i class="fa fa-file-text-o" aria-hidden="true"></i> Data de cadastro do aluno</label>
																<input class="form-control" type="text" readonly="true" rows="8" style="color:black"value="<?php echo $matricula['datacad']; ?>"></input></p>
																
																<p><label style="color:RGBA(245,245,245,1.0)"><i class="fa fa-file-text-o" aria-hidden="true"></i> Código da turma</label>
																<input class="form-control" type="text" readonly="true" rows="8" style="color:black"value="<?php echo $matricula['COD_turmaFK']; ?>"></input></p>
																
																<p><label style="color:RGBA(245,245,245,1.0)"><i class="fa fa-file-text-o" aria-hidden="true"></i> ID do aluno</label>
																<input class="form-control" type="text" readonly="true" rows="8" style="color:black"value="<?php echo $matricula['ID_alunoFK'];?>"></input></p>
																
																<p><label style="color:RGBA(245,245,245,1.0)"><i class="fa fa-file-text-o" aria-hidden="true"></i> Matrícula do aluno</label>
																<input class="form-control" type="text" readonly="true" rows="8" style="color:black"value="<?php echo $matricula['MAT_aluno']; ?>"></input></p>
																
														</div>	
																
																		
														
														
													<?php } ?>
												</form>
													<p><button type="button submit" name="buscar" class="btn btn-success pull-right" style="margin-left: 5px;"><i class="fa fa-search" aria-hidden="true"></i> Buscar</button></p>
												</form><br><br>
											</div>
										</div>
									</div>
								</div>
							</div>
								
								<div class="bgimg-2" id="pgm">
									<div class="caption">
										<span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;text-shadow: 2px 2px 8px #000000;">Finanças (BREVE)</span>
									</div>
								</div>
						
																						<div style="position:relative;">
								<div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
									<div class="row"><div class="col-md-2"></div>
										<div 0class="col-md-8">
											<div class="well">
												<form name="teste" method="post" action="">
													<!-- Exibe relatório pedido (código PHP)-->
										
										
										
															<p><button type="button submit" name="buscar" class="btn btn-success pull-right" style="margin-left: 5px;"><i class="fa fa-search" aria-hidden="true"></i> Buscar</button></p>
																	
																	
												</form><br><br>
											</div>
										</div>
									</div>
								</div>
							</div>
							
								<div class="bgimg-1" id="prm">
									<div class="caption">
										<span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;text-shadow: 2px 2px 8px #000000;">Professores matriculados</span>
									</div>
								</div>
							
							<div style="position:relative;">
								<div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
									<div class="row"><div class="col-md-2"></div>
										<div 0class="col-md-8">
											<div class="well" style="background:RGBA(255, 255, 255, 0.1);">
												<form>
													<!-- Exibe relatório pedido (código PHP)-->
										
												<form>
													<?php 
														$sqlp =(mysqli_query($conecta,"SELECT * FROM professor ORDER BY COD_professor desc"));
																while( $professor = mysqli_fetch_array($sqlp)){
													?>
													
														<div class="well" style="background:RGBA(255, 255, 255, 0.1);">
														
															<p><label style="color:RGBA(245,245,245,1.0)"><i class="fa fa-file-text-o" aria-hidden="true"></i> Código professor</label>
																<input class="form-control" type="text" readonly="true" rows="8" style="color:black"value="<?php echo $professor['COD_professor']; ?>"></input></p>
																
																<p><label style="color:RGBA(245,245,245,1.0)"><i class="fa fa-file-text-o" aria-hidden="true"></i> Nome professor</label>
																<input class="form-control" type="text" readonly="true" rows="8" style="color:black"value="<?php echo $professor['nome_professor']; ?>"></input></p>
																
																<p><label style="color:RGBA(245,245,245,1.0)"><i class="fa fa-file-text-o" aria-hidden="true"></i> Telefone professor</label>
																<input class="form-control" type="text" readonly="true" rows="8" style="color:black"value="<?php echo $professor['telefone_professor'];?>"></input></p>
																
																<p><label style="color:RGBA(245,245,245,1.0)"><i class="fa fa-file-text-o" aria-hidden="true"></i> Residência</label>
																<input class="form-control" type="text" readonly="true" rows="8" style="color:black"value="<?php echo $professor['residencia']; ?>"></input></p>
																
																<p><label style="color:RGBA(245,245,245,1.0)"><i class="fa fa-file-text-o" aria-hidden="true"></i> CPF</label>
																<input class="form-control" type="text" readonly="true" rows="8" style="color:black"value="<?php echo $professor['cpf']; ?>"></input></p>
																
																<p><label style="color:RGBA(245,245,245,1.0)"><i class="fa fa-file-text-o" aria-hidden="true"></i> Licenciatura do professor</label>
																<input class="form-control" type="text" readonly="true" rows="8" style="color:black"value="<?php echo $professor['licenciatura']; ?>"></input></p>
														</div>	
																
																		
														
														
													<?php } ?>
												</form>
															
																<p><button type="button submit" name="buscar" class="btn btn-success pull-right" style="margin-left: 5px;"><i class="fa fa-search" aria-hidden="true"></i> Buscar</button></p>
																	
																	
												</form><br><br>
											</div>
										</div>
									</div>
								</div>
							</div>
						
								<div class="bgimg-2" id="fum">
									<div class="caption">
										<span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;text-shadow: 2px 2px 8px #000000;">Funcionários matriculados</span>
									</div>
								</div>
							
							<div style="position:relative;">
								<div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
									<div class="row"><div class="col-md-2"></div>
										<div 0class="col-md-8">
											<div class="well" style="background:RGBA(255, 255, 255, 0.1);">
												<form>
													<!-- Exibe relatório pedido (código PHP)-->
												
												<form>
													<?php

														$sqlf =(mysqli_query($conecta,"SELECT * FROM funcionario ORDER BY COD_func desc"));
																while( $funcionario = mysqli_fetch_array($sqlf)){
																	
															?>
															<div class="well" style="background:RGBA(255, 255, 255, 0.1);">
															<p><label style="color:RGBA(245,245,245,1.0)"><i class="fa fa-file-text-o" aria-hidden="true"></i> Código do funcionário</label>
															<input class="form-control" type="text" readonly="true" style="color:black" value="<?php echo $funcionario['COD_func']; ?>"> </input></p>
															
															<p><label style="color:RGBA(245,245,245,1.0)"><i class="fa fa-file-text-o" aria-hidden="true"></i> Nome do funcionário</label>
															<input class="form-control" type="text" readonly="true" rows="8" style="color:black"value="<?php echo $funcionario['nome_func']; ?>"></input></p>
															
															<p><label style="color:RGBA(245,245,245,1.0)"><i class="fa fa-file-text-o" aria-hidden="true"></i> CPF</label>
															<input class="form-control" type="text" readonly="true" rows="8" style="color:black"value="<?php echo $funcionario['CPF']; ?>"></input></p>
															
															<p><label style="color:RGBA(245,245,245,1.0)"><i class="fa fa-file-text-o" aria-hidden="true"></i> Telefone</label>
															<input class="form-control" type="text" readonly="true" style="color:black" value="<?php echo $funcionario['telefone_func']; ?>"> </input></p>
															
															<p><label style="color:RGBA(245,245,245,1.0)"><i class="fa fa-file-text-o" aria-hidden="true"></i> Cargo</label>
															<input class="form-control" type="text" readonly="true" rows="8" style="color:black"value="<?php echo $funcionario['cargo']; ?>"></input></p>

															</div>
																<?php } ?> 	
															
												</form>
												
													<p><button type="button submit" name="buscar" class="btn btn-success pull-right" style="margin-left: 5px;"><i class="fa fa-search" aria-hidden="true"></i> Buscar</button></p>
												</form><br><br>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="bgimg-1" id="uac">
									<div class="caption">
										<span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;text-shadow: 2px 2px 8px #000000;">Usuários cadastrados</span>
									</div>
								</div>
							
							<div style="position:relative;">
								<div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
									<div class="row"><div class="col-md-2"></div>
										<div 0class="col-md-8">
											<div class="well" style="background:RGBA(255, 255, 255, 0.1);">
												<form>
													<!-- Exibe relatório pedido (código PHP)-->
												
												<form>
													<?php

														$sqlu =(mysqli_query($conecta,"SELECT * FROM usuario ORDER BY ID_usuario desc"));
																while( $usuario = mysqli_fetch_array($sqlu)){
																	
															?>
															<div class="well" style="background:RGBA(255, 255, 255, 0.1);">
															<p><label style="color:RGBA(245,245,245,1.0)"><i class="fa fa-file-text-o" aria-hidden="true"></i> ID do usuário</label>
															<input class="form-control" type="text" readonly="true" style="color:black" value="<?php echo $usuario['ID_usuario']; ?>"> </input></p>
															
															<p><label style="color:RGBA(245,245,245,1.0)"><i class="fa fa-file-text-o" aria-hidden="true"></i> Nick </label>
															<input class="form-control" type="text" readonly="true" rows="8" style="color:black"value="<?php echo $usuario['nick']; ?>"></input></p>
															
															<p><label style="color:RGBA(245,245,245,1.0)"><i class="fa fa-file-text-o" aria-hidden="true"></i> Ranking</label>
															<input class="form-control" type="text" readonly="true" rows="8" style="color:black"value="<?php echo $usuario['ranking']; ?>"></input></p>
															
															</div>
																<?php } ?> 	
															
												</form>
												
													<p><button type="button submit" name="buscar" class="btn btn-success pull-right" style="margin-left: 5px;"><i class="fa fa-search" aria-hidden="true"></i> Buscar</button></p>
												</form><br><br>
											</div>
										</div>
									</div>
								</div>
							</div>
					
					</div>				
				</div>		
						
						<div role="tabpanel" class="tab-pane" id="adicionar">
								<style type="text/css">
							#menu-vertical{
							  position:fixed;
							  z-index:999; 
							  top:25px;
							  overflow:hidden;
							  padding:0px;
							  
							  
							}
						</style>
 
							<div id="menu-vertical">
								<div id="menu">
									<div id="lateral"> 
										<div class="row">
											<div class="col-md-10">
												<div class="coisinha" style="padding-left:50px;padding-right:10px; padding-top:10px; padding-bottom:10px">
													<a href="#adal"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Alunos</a>
													<hr>
													<a href="#admes"><i class="fa fa-coffee" aria-hidden="true"></i> Professores</a>
													<hr>
													<a href="#adfunc"><i class="fa fa-briefcase" aria-hidden="true"></i> Funcionários</a><br>
												</div>
											</div>
											<div class="col-md-2"><i class="fa fa-angle-double-right fa-2x" aria-hidden="true" style="padding-top:60px; margin-right:10px; color:#1476BC"></i></div>
										</div>
									
									</div>	
								</div>
							</div>
								
								<div class="row">
									<div class="bgimg-1" id="adal">
										<div class="caption">
											<span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;text-shadow: 2px 2px 8px #000000;"><i class="fa fa-plus fa-2x" style="color:#f7f7f7;text-shadow: 2px 2px 8px #000000;" aria-hidden="true"></i> Alunos</span>
										</div>
									</div>
									
									<div style="position:relative;">
										<div style="color:#282E34;font-family:Courier monospace;;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
											<div class="row"><div class="col-md-2"></div>
												<div 0class="col-md-8">
													<div class="well">
														<form name="cada" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
															<!-- Insere Alunos -->
												
																	<p><label for="nome">Nome</label><input class="form-control" type="text" placeholder="Insira o nome aqui." name="nomea"></input></p>
														<p><label for="telefone">Telefone</label><input class="form-control" type="text" placeholder="Insira o telefone aqui." name="telefonea"></input></p>
														<p><label for="endereço">Endereço</label><input class="form-control" type="text" placeholder="Insira o logadouro aqui." name="enda"></input></p>
														<p><label for="CPF">CPF</label><input class="form-control" type="text" placeholder="Insira o CPF aqui." name="cpfa" maxlength="11"></input></p>
																	
																		<p><button type="button submit" name="cada" class="btn btn-success pull-right" style="margin-left: 5px;"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Acrescentar</button></p>
																			
																			
														</form><br><br>
													</div>
												</div>
											</div>
											<div class="row">
												<div 0class="col-md-8">
													<div class="well">
													
													<center><span class="border" style="font-size:25px;color:#282E34;font-family:Courier monospace;">Matrícula</span></center>
														<form name="matriculad" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
																	<!-- MATRICULA ALUNOS -->
																
																<p><label for="Data">Data</label><input class="form-control" type="date" name="datacad"></input></p>
																	
																	<!-- SELECT COM PHP CODIGO DA TURMA -->
																	
														<p><label for="COD_turmaFK">Código da turma</label>
														  <select name="COD_turmaFK" class="form-control">
															<option> SELECIONE </option>
															   <?php 
																
															   while($clip2 = mysqli_fetch_array($combusca2)){
															   ?>
															   
															   
															   <option value="<?php echo $clip2['COD_turma'] ;?> ">
																<?php echo $clip2['COD_turma'] ;?> - 
																<?php echo $clip2['nome_turma'] ;?>
																  
																
																
															   </option>
															<?php
																} 
															?>
														  </select>
														</p>
														
																<!-- SELECT COM PHP ID DO ALUNO -->
														
														<p><label for="Idaluno">ID do aluno</label>
														  <select name="idaluno" class="form-control">
															<option> Selecione...  </option>
															   <?php 
																
															   while($clip1 = mysqli_fetch_array($combusca1)){
															   ?>
															   
															   
																<option value="<?php  echo $clip1['ID_aluno'] ;?>">
																	<?php echo $clip1['ID_aluno'] ;?> - 
																	<?php echo $clip1['nome_aluno'] ;?>
																</option>  
															<?php
																} 
															?>
														  </select>
														</p>
														
																		
															<p><button type="button submit" name="matriculad" class="btn btn-success pull-right" style="margin-left: 5px;"><i class="fa fa-file-text-o" aria-hidden="true"></i> Matricular</button></p>
														</form><br><br>
													</div>
												</div>
											</div>
										</div>
									</div>
									
									
									<div class="bgimg-2" id="admes">
										<div class="caption">
											<span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;text-shadow: 2px 2px 8px #000000;"><i class="fa fa-plus fa-2x" style="color:#f7f7f7;text-shadow: 2px 2px 8px #000000;" aria-hidden="true"></i> Professores</span>
										</div>
									</div>
									
									<div style="position:relative;">
										<div style="color:#282E34;font-family:Courier monospace;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
											<div class="row"><div class="col-md-2"></div>
												<div 0class="col-md-8">
													<div class="well">
														<form name="cadp" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
															<!-- Insere professores -->
												
																	<p><label for="nome">Nome</label><input class="form-control" type="text" placeholder="Insira o nome aqui." name="nomep"></input></p>
														<p><label for="telefone">Telefone</label><input class="form-control" type="text" placeholder="Insira o telefone aqui." name="telefonep"></input></p>
														<p><label for="licenciatura">Licenciatura</label><input class="form-control" type="text" placeholder="Insira o número de licenciatura aqui." name="codip" maxlength="11"></input></p>
														<p><label for="cpf">CPF</label><input class="form-control" type="text" placeholder="Insira o CPF aqui." name="cpfp" maxlength="11"></input></p>
														<p><label for="residencia">Residência</label><input class="form-control" type="text" placeholder="Insira o endereço aqui." name="residenciap"></input></p>
																	
																		<p><button type="button submit" name="cadp" class="btn btn-success pull-right" style="margin-left: 5px;"><i class="fa fa-coffee" aria-hidden="true"></i> acrescentar</button></p>
																			
																			
														</form><br><br>
													</div>
												</div>
											</div>
											<div class="row"><div class="col-md-2"></div>
												<div 0class="col-md-8">
													<div class="well">
														<center><span class="border" style="font-size:25px;color:#282E34;font-family:Courier monospace;">Disciplina</span></center>
														<form name="admat" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
															<p><label for="disciplina">Disciplina</label><input class="form-control" type="text" placeholder="Insira a disciplina aqui." name="nome_disciplina"></input></p>
															
																													<!-- SELECT PHP COD_PROFESSOR (NOME PROFESSOR E COD EXIBIRÃO. ATRIBUIDO VALOR APENAS EM COD.)  -->
																													
																<p><label for="COD_professorFK">ID do professor</label>
																  <select name="COD_professorFK" class="form-control">
																	<option> Selecione...  </option>
																	   <?php 
																		
																	   while($clip3 = mysqli_fetch_array($combusca3)){
																	   ?>
																	   
																	   
																		<option value="<?php  echo $clip3['COD_professor'] ;?>">
																			<?php echo $clip3['COD_professor'] ;?> - 
																			<?php echo $clip3['nome_professor'] ;?>
																		</option>  
																	<?php
																		} 
																	?>
																  </select>
																</p>
																
																<p><label for="COD_turmaFK">Código da turma</label>
																  <select name="COD_turmaFK" class="form-control">
																	<option> Selecione...  </option>
																	   <?php 
																		
																	   while($clip4 = mysqli_fetch_array($combusca4)){
																	   ?>
																	   
																	   
																		<option value="<?php  echo $clip4['COD_turma'] ;?>">
																			<?php echo $clip4['COD_turma'] ;?> - 
																			<?php echo $clip4['nome_turma'] ;?> -
																			<?php echo $clip4['curso'] ;?>
																		</option>  
																	<?php
																		} 
																	?>
																  </select>
																</p>
															
															<p><button type="button submit" name="admat" class="btn btn-success pull-right" style="margin-left: 5px;"><i class="fa fa-book" aria-hidden="true"></i> acrescentar</button></p>
														</form><br><br>
													</div>
												</div>	
											</div>
										</div>
									</div>
									
									
									<div class="bgimg-1" id="adfunc">
										<div class="caption">
											<span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;text-shadow: 2px 2px 8px #000000;"><i class="fa fa-plus fa-2x" style="color:#f7f7f7;text-shadow: 2px 2px 8px #000000;" aria-hidden="true"></i> Funcionários</span>
										</div>
									</div>
									
									<div style="position:relative;">
										<div style="color:#282E34;font-family:Courier monospace;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
											<div class="row"><div class="col-md-2"></div>
												<div 0class="col-md-8">
													<div class="well">
														<form name="teste" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
															<!-- Exibe relatório pedido (código PHP)-->
												
																	
																	
																		<p><label for="nome">Nome</label><input class="form-control" type="text" placeholder="Insira o nome aqui." name="nomef"></input></p>
														<p><label for="telefone">Telefone</label><input class="form-control" type="text" placeholder="Insira o telefone aqui." name="telefonef"></input></p>
														<p><label for="cargo">Cargo</label><select class="form-control" name="cargof" placeholder="Selecione um cargo">
																								
																								<option value="Atendente">Atendente</option>
																								<option value="Coordenador">Coordenador</option>
																								<option value="Diretor">Diretor</option>
																								<option value="Faxineiro">Faxineiro</option>
																								<option value="Inspetor">Inspetor</option>
																							</select></p>
														<p><label for="cpf">CPF</label><input class="form-control" type="text" placeholder="Insira o CPF aqui." name="cpff"></input></p>
														
																	
																		<p><button type="button submit" name="cadf" class="btn btn-success pull-right" style="margin-left: 5px;"><i class="fa fa-briefcase" aria-hidden="true"></i> acrescentar</button></p>
																			
																			
														</form><br><br>
													</div>
												</div>
											</div>
										</div>
									</div>
									
								</div>
						</div>
						
						<div role="tabpanel" class="tab-pane" id="msgs">
								<div class="row" style="padding-top:50px;">
									<div class="bgimg-1">
										<div class="caption">
											<span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;text-shadow: 2px 2px 8px #000000;"><i class="fa fa-envelope-o fa-2x" style="color:#f7f7f7;text-shadow: 2px 2px 8px #000000;" aria-hidden="true"></i> Pedidos de ajuda</span>
										</div>
									</div>
									
									<div style="position:relative;">
										<div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
											<div class="row">
												<style>
												#travada {resize:none}
												</style>
												<div class="col-md-12">
												<form>
													<?php

														$sql =(mysqli_query($conecta,"SELECT * FROM ajuda ORDER BY ID_comentario desc"));
																while( $exibir = mysqli_fetch_array($sql)){
															?>
															<div class="well" style="background:RGBA(255, 255, 255, 0.1) ;padding-bottom:50px;">
															<p><label style="color:RGBA(245,245,245,1.0)"><i class="fa fa-info" aria-hidden="true"></i> Nick</label>
															<input class="form-control" type="text" readonly="true" style="color:black" value="<?php echo $exibir['nickmsg']; ?>"> </input></p>
															
															<p><label style="color:RGBA(245,245,245,1.0)"><i class="fa fa-file-text-o" aria-hidden="true"></i> Mensagem</label>
															<textarea class="form-control" type="text" id="travada" readonly="true" rows="8" style="color:black"><?php echo $exibir['mensagem']; ?></textarea></p>
																<!--<div class="checkbox" style="color:RGBA(245,245,245,1.0); padding-bottom:5px;"><p><label class="pull-right"><input type="checkbox" name="mec" value="on"> Resolvido</input>
																</label></p></div>-->
																<button type="button submit" class="btn btn-danger pull-right" name="apagarregistros"><i class="fa fa-trash-o" aria-hidden="true"></i> Apagar registro </button>
															</div>
													<?php } ?> 
											
															<button type="button submit" class="btn btn-danger pull-right" name="apagarregistros"><i class="fa fa-trash-o" aria-hidden="true"></i> Apagar todos os registros </button>
											
												</form>
												</div>
											</div>
										</div>
									</div>
								</div>
						</div>
						
						
						
						<div role="tabpanel" class="tab-pane" id="confuser" style="padding-top:50px;">																					 <!-- VAZIO -->
								<div class="row">
									<div class="col-md-12">
										CONFUSER (CONFIGURAÇÕES DO USUÁRIO LOGADO EX:MUDAR SENHA)
									</div>
								</div>
						</div>
							
						
						
						
					
			
				
			</div>
			
				<div class="row">
						<div class="bgimg-5">
						  <div class="caption">
							<span class="border">desenvolvido por Yan. Senac® 2016.4</span>--

						  </div>
						</div>
				</div>
		</div>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
			<script src="js/jquery-1.11.3.min.js"></script>

		<!-- Include all compiled plugins (below), or include individual files as needed --> 
			<script src="js/bootstrap.js"></script>
	</body>
</html>
	
	