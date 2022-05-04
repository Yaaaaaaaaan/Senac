<!doctype html>
<html lang="pt-Br">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
			  background-image:linear-gradient(90deg,#fff,#f5f5f5) ;
			  border-right:1px solid #e3e3e3;
			  border-top:1px solid #e3e3e3;
			  border-bottom:1px solid #e3e3e3;
			  border-radius:0px 4px 4px 0px;
			  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
					  box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
						overflow:hidden;
			}
			

</style>
<!-- iconawesome -->
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<meta charset="utf-8">
	<title>Home IE-E</title>
	<!-- Icone -->
	<LINK REL="SHORTCUT ICON" href="img/favicon.gif">
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
			<li role="presentation"><a href="#articles" aria-controls="articles" role="tab" data-toggle="tab"><i class="fa fa-file-text-o" aria-hidden="true"></i> Notícias</a></li>
			
		  <li role="presentation" class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
			 <i class="fa fa-building-o" aria-hidden="true"></i> Institucional <span class="caret"></span>
			</a>
			<ul class="dropdown-menu">
			<li><a href="#inst" aria-controls="inst" role="tab" data-toggle="tab"><i class="fa fa-info" aria-hidden="true"></i> Sobre nós</a></li>
			 <li><a href="#vgeral"><i class="fa fa-eye" aria-hidden="true"></i> Visão Geral</a></li>
			 <li><a href="#queremos"><i class="fa fa-globe" aria-hidden="true"></i> O que queremos para o mundo</a></li>
			</ul>
		  </li>
				<li role="presentation"><a href="#login" aria-controls="login" role="tab" data-toggle="tab"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
			</ul>
		  </div>
		</nav>
		<!-- Termina barra de navegação -->
		


		  <!-- Paineis das TABs -->
			<div class="tab-content" style="padding-top:50px;">
				<div role="tabpanel" class="tab-pane active" id="home">
					<div class="container-fluid">
				
							<div class="row">
								<div class="col-md-8">
									<div class="jumbotron" style="height:720px;padding-top:15px;">
										<center><h3>Em destaque (Mais recente)</h3></center>
										<hr>
										
										<p>
											
											
											<h3>Mussum Ipsum, cacilds vidis litro abertis. Si num tem leite então bota uma pinga aí cumpadi! Interagi no mé, cursus quis, vehicula ac nisi. Não sou faixa preta cumpadi, sou preto inteiris, inteiris. Suco de cevadiss deixa as pessoas mais interessantis.

												Mauris nec dolor in eros commodo tempor. Aenean aliquam molestie leo, vitae iaculis nisl. Admodum accumsan disputationi eu sit. Vide electram sadipscing et per. Nec orci ornare consequat. Praesent lacinia ultrices consectetur. Sed non ipsum felis. Todo mundo vê os porris que eu tomo, mas ninguém vê os tombis que eu levo!

												Quem num gosta di mé, boa gentis num é. Viva Forevis aptent taciti sociosqu ad litora torquent. Copo furadis é disculpa de bebadis, arcu quam euismod magna. Nullam volutpat risus nec leo commodo, ut interdum diam laoreet. Sed non consequat odio. <H2>ENTRE EM CONTATO ATRAVÉS DO E-MAIL: ATENDIMENTO@IEE.COM</H2></h3>
											
											
										</p>
									</div>
								</div>
									<div class="col-md-4">
											<div class="jumbotron" style="height:220px; padding-top:15px"> <h3>Mussum Ipsum, cacilds vidis litro abertis. Quem manda na minha terra sou euzis!</h3> </div>
										<div class="jumbotron" style="height:220px; padding-top:15px"> <h3>Mussum Ipsum, cacilds vidis litro abertis. Quem manda na minha terra sou euzis!</h3> </div>
										<div class="jumbotron" style="height:220px; padding-top:15px"> <h3>Mussum Ipsum, cacilds vidis litro abertis. Quem manda na minha terra sou euzis!</h3> </div>
										
									
									
								
									</div>
							</div>
			

					</div>
				</div>
				<div role="tabpanel" class="tab-pane" id="articles">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-2">
								<div class="coisinha" style="padding-left:5px;">
								
									<a href="#article1" aria-controls="article1" role="tab" data-toggle="tab">Em destaque (Mais recente)</a><br>
									<a href="#article2" aria-controls="article2" role="tab" data-toggle="tab">Lorem Ipsum</a><br>
									<a href="#article3" aria-controls="article3" role="tab" data-toggle="tab">Lorem Ipsum</a><br>
									<a href="#article4" aria-controls="article4" role="tab" data-toggle="tab">Lorem Ipsum</a><br>
									<a data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Mais notícias...</a>
									
									<div class="collapse" id="collapseExample">
										<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
										  
										 
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Maio</a>										
											<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
											  
												<a href="#article5" aria-controls="article2" role="tab" data-toggle="tab">Lorem Ipsum</a><br>
												<a href="#article6" aria-controls="article3" role="tab" data-toggle="tab">Lorem Ipsum</a><br>
												<a href="#article7" aria-controls="article4" role="tab" data-toggle="tab">Lorem Ipsum</a><br>
											  
											</div>
										</div>
									 
										
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Abril</a>
											
										<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
										  
											<a href="#article8" aria-controls="article2" role="tab" data-toggle="tab">Lorem Ipsum</a><br>
											<a href="#article9" aria-controls="article3" role="tab" data-toggle="tab">Lorem Ipsum</a><br>
											<a href="#article10" aria-controls="article4" role="tab" data-toggle="tab">Lorem Ipsum</a><br>
										  
										</div>
									  
									</div>
								</div>
							</div>
						
					
							<div class="col-md-10">
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active" id="article1">
										<div class="jumbotron" style="height:720px;">
											<center><h3>Em destaque (Mais recente)</h3></center>
								
												<p>
									
									
													<h3>Mussum Ipsum, cacilds vidis litro abertis. Si num tem leite então bota uma pinga aí cumpadi! Interagi no mé, cursus quis, vehicula ac nisi. Não sou faixa preta cumpadi, sou preto inteiris, inteiris. Suco de cevadiss deixa as pessoas mais interessantis.

													Mauris nec dolor in eros commodo tempor. Aenean aliquam molestie leo, vitae iaculis nisl. Admodum accumsan disputationi eu sit. Vide electram sadipscing et per. Nec orci ornare consequat. Praesent lacinia ultrices consectetur. Sed non ipsum felis. Todo mundo vê os porris que eu tomo, mas ninguém vê os tombis que eu levo!

													Quem num gosta di mé, boa gentis num é. Viva Forevis aptent taciti sociosqu ad litora torquent. Copo furadis é disculpa de bebadis, arcu quam euismod magna. Nullam volutpat risus nec leo commodo, ut interdum diam laoreet. Sed non consequat odio.</h3>
									
								
												</p>
										</div>
									</div>
									
									<div role="tabpanel" class="tab-pane" id="article2">
										<div class="jumbotron" style="height:220px"> <h3>Mussum Ipsum, cacilds vidis litro abertis. Quem manda na minha terra sou euzis! Copo furadis é disculpa de bebadis, arcu quam euismod magna. Todo mundo vê os porris que eu tomo, mas ninguém vê os tombis que eu levo! Detraxit consequat et quo num tendi nada.</h3> </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			
							<!-- Login Usuários -->
					<div role="tabpanel" class="tab-pane" id="login">
						
						<div style="position:relative;">
							<div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
							<div class="container-fluid">
							<div class="row" style="padding-top:100px;padding-bottom:100px;">
								<div class="col-md-4"></div>
								<div class="col-md-4">
									<span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;text-shadow: 2px 2px 8px #000000;">Acesso ao sistema</span>
									<form name="login" method="post" action="valida.php">
									  <div class="form-group">
										<label for="nick">Usuário</label>
										<input type="text" class="form-control" id="nick" placeholder="Nick(Nome de usuário)" name="nick">
									  </div>
									  <div class="form-group">
										<label for="senha">Senha</label>
										<input type="password" class="form-control" id="senha" placeholder="Senha" name="senha">
									  </div>
									
									<div class="pull-right"> <button type="submit" class="btn btn-success">Entrar!</button></div>
									</form>
								</div>
							</div>
							</div>
							</div>
						</div>
					</div>
				
				<div role="tabpanel" class="tab-pane" id="inst">
					<div class="container-fluid">
					<div class="row">
						
							<div class="bgimg-1" id="vgeral">
							  <div class="caption">
								<span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;text-shadow: 2px 2px 8px #000000;">Visão Geral</span>
							  </div>
							</div>
					</div>
						<div class="row">
							<div style="position:relative;">
									<div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
										<h3>Mussum</h3> Ipsum, cacilds vidis litro abertis. Copo furadis é disculpa de bebadis, arcu quam euismod magna. Si u mundo tá muito paradis? Toma um mé que o mundo vai girarzis! Leite de capivaris, leite de mula manquis sem cabeça. Mé faiz elementum girarzis, nisi eros vermeio.

											Viva Forevis aptent taciti sociosqu ad litora torquent. Quem num gosta di mim que vai caçá sua turmis! Delegadis gente finis, bibendum egestas augue arcu ut est. Cevadis im ampola pa arma uma pindureta.

											Aenean aliquam molestie leo, vitae iaculis nisl. Mauris nec dolor in eros commodo tempor. Aenean aliquam molestie leo, vitae iaculis nisl. Todo mundo vê os porris que eu tomo, mas ninguém vê os tombis que eu levo! Mais vale um bebadis conhecidiss, que um alcoolatra anonimis.

											Tá deprimidis, eu conheço uma cachacis que pode alegrar sua vidis. Interagi no mé, cursus quis, vehicula ac nisi. Posuere libero varius. Nullam a nisl ut ante blandit hendrerit. Aenean sit amet nisi. Nullam volutpat risus nec leo commodo, ut interdum diam laoreet. Sed non consequat odio.<br> <br> <hr>

											<h3>Mussum</h3> Ipsum, cacilds vidis litro abertis. Copo furadis é disculpa de bebadis, arcu quam euismod magna. Si u mundo tá muito paradis? Toma um mé que o mundo vai girarzis! Leite de capivaris, leite de mula manquis sem cabeça. Mé faiz elementum girarzis, nisi eros vermeio.

											Viva Forevis aptent taciti sociosqu ad litora torquent. Quem num gosta di mim que vai caçá sua turmis! Delegadis gente finis, bibendum egestas augue arcu ut est. Cevadis im ampola pa arma uma pindureta.

											Aenean aliquam molestie leo, vitae iaculis nisl. Mauris nec dolor in eros commodo tempor. Aenean aliquam molestie leo, vitae iaculis nisl. Todo mundo vê os porris que eu tomo, mas ninguém vê os tombis que eu levo! Mais vale um bebadis conhecidiss, que um alcoolatra anonimis.

											Tá deprimidis, eu conheço uma cachacis que pode alegrar sua vidis. Interagi no mé, cursus quis, vehicula ac nisi. Posuere libero varius. Nullam a nisl ut ante blandit hendrerit. Aenean sit amet nisi. Nullam volutpat risus nec leo commodo, ut interdum diam laoreet. Sed non consequat odio.
									</div>
							</div>
							
						</div>		
						<div class="row">
							<div class="bgimg-2" id="queremos">
							  <div class="caption">
								<span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;text-shadow: 2px 2px 8px #000000;">O que queremos para o Mundo</span>
							  </div>
							</div>
						</div>	
						<div class="row">
							<div style="position:relative;">
									<div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
										<h3>Mussum</h3> Ipsum, cacilds vidis litro abertis. Per aumento de cachacis, eu reclamis. Mauris nec dolor in eros commodo tempor. Aenean aliquam molestie leo, vitae iaculis nisl. Mé faiz elementum girarzis, nisi eros vermeio. Praesent vel viverra nisi. Mauris aliquet nunc non turpis scelerisque, eget.

										Posuere libero varius. Nullam a nisl ut ante blandit hendrerit. Aenean sit amet nisi. Detraxit consequat et quo num tendi nada. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis. Aenean aliquam molestie leo, vitae iaculis nisl.

										Quem num gosta di mé, boa gentis num é. Praesent malesuada urna nisi, quis volutpat erat hendrerit non. Nam vulputate dapibus. Pra lá , depois divoltis porris, paradis. Mais vale um bebadis conhecidiss, que um alcoolatra anonimis.

										Diuretics paradis num copo é motivis de denguis. Si num tem leite então bota uma pinga aí cumpadi! Atirei o pau no gatis, per gatis num morreus. Cevadis im ampola pa arma uma pindureta.

										A ordem dos tratores não altera o pão duris. Casamentiss faiz malandris se pirulitá. Manduma pindureta quium dia nois paga. Viva Forevis aptent taciti sociosqu ad litora torquent.

										Interagi no mé, cursus quis, vehicula ac nisi. Admodum accumsan disputationi eu sit. Vide electram sadipscing et per. Si u mundo tá muito paradis? Toma um mé que o mundo vai girarzis! Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.

										Delegadis gente finis, bibendum egestas augue arcu ut est. Copo furadis é disculpa de bebadis, arcu quam euismod magna. Nec orci ornare consequat. Praesent lacinia ultrices consectetur. Sed non ipsum felis. Quem num gosta di mim que vai caçá sua turmis!
									</div>
							</div>
						</div>
					</div>	
				</div>
			</div>
				<div class="container-fluid">
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
	
	