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
	<!-- ícone -->
	<LINK REL="SHORTCUT ICON" href="img/favicon.gif">
	<?php
		session_start();
		include "conexao.php";
		if(isset($_SESSION['usuario'])){	
			
		}
		else{
			header("location:index.php");
		}
		
		
		/* Inserir os dados aqui O.o */
		if (isset($_POST["sendmsg"])){
		$nicksg=$_POST['nicksg'];
		$msg=$_POST['msg'];           
		$insert=mysqli_query($conecta,"insert into ajuda (mensagem,nickmsg) values ('$msg','$nicksg')");
		}
		
		error_reporting(E_ALL & ~ E_NOTICE);

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
			 <li><a href="#msgs" aria-controls="msgs" role="tab" data-toggle="tab"><i class="fa fa-envelope-o" aria-hidden="true"></i> Mensagens</a></li>
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
													echo "<i class='fa fa-coffee' aria-hidden='true'></i> Bem vindo, ".$_SESSION['usuario'];
													
												
												
												
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
													<a href="#alm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Boletim</a><br>
													<hr>
													<a href="#uac"><i class="fa fa-archive" aria-hidden="true"></i> Histórico</a>
													
												</div>
											</div>
											<div class="col-md-2"><i class="fa fa-angle-double-right fa-2x" aria-hidden="true" style="padding-top:35px; margin-right:10px; color:#1476BC"></i></div>
										</div>
									
									</div>	
								</div>
							</div>
 
					
						
							
						
						
						
								<div class="bgimg-1" id="alm">
									<div class="caption">
										<span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;text-shadow: 2px 2px 8px #000000;"> Boletim</span>
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
								<div class="bgimg-1" id="uac">
									<div class="caption">
										<span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;text-shadow: 2px 2px 8px #000000;">Turmas matriculadas</span>
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
					
					</div>				
				</div>		
						
								<div role="tabpanel" class="tab-pane" id="msgs">
									<div class="row">
										<div class="bgimg-1" id="msgs">
											<div class="caption">
												<span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;text-shadow: 2px 2px 8px #000000;"><i class="fa fa-envelope-o fa-2x" style="color:#f7f7f7;text-shadow: 2px 2px 8px #000000;" aria-hidden="true"></i> Ajuda</span>
											</div>
										</div>
									
										<div style="position:relative;">
											<div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
											<div class="row">
												<div class="col-md-12" style="padding-top:50px;">
													<style>
													
														#batata{ resize: none; }
														
													</style>
														<form name="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
															<p><label for="nick">Nick</label><input class="form-control" type="text" readonly="true" value="<?php echo $_SESSION['usuario'];?>" name="nicksg"></input></p>
															<p><label for="mensagem">Mensagem</label><textarea id="batata"  class="form-control" rows="5" style="width:100%" name="msg"></textarea></p>
															<button type=reset class="btn btn-warning pull-right" style="margin-left:5px;">Limpar</button>
															<button type="button submit" class="btn btn-success pull-right" name="sendmsg">Enviar</button>
														</form>
												</div>
											</div>
											</div>
										</div>
									</div>
								</div>
						
						
						
						<div role="tabpanel" class="tab-pane" id="confuser" style="padding-top:50px;">					
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
							<span class="border">desenvolvido por Yan. Senac® 2016.4</span>
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
	
	