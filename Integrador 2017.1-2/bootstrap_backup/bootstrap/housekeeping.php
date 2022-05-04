<?php
	include"conexaovertrigo.php";
		include"formlog.php";
?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title>CD-STORE Housekeeping</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/handworking.css" rel="stylesheet">
     <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  </head>
		<body>
			<div class="container-fluid">
   	<div class="row">
   	
  <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">CD STORE</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#hm">Home <span class="sr-only">(current)</span></a></li>
         
      </ul>
		<ul class="nav navbar-nav navbar-right">
			
			
			<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-plus" aria-hidden="true"></i></a>
          <ul class="dropdown-menu">
            <li><a href="#est" data-toggle="collapse" data-parent="#accordion" aria-expanded="true" aria-controls="est">Estoque</a></li>
            <li role="separator" class="divider"></li>
            <li><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#rel" aria-expanded="false" aria-controls="rel">Relatórios</a></li>
            <li role="separator" class="divider"></li>
            <li><a  class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#cli" aria-expanded="false" aria-controls="cli">Clientes</a></li>
          </ul>
		 </li>
			
				<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></a>
          <ul class="dropdown-menu">
           	<li><a data-toggle="modal" data-target=".bs-example-modal-lg" href="modal3">Relatório de atividades</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#inf">Informações</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#conf">Configurações da Conta</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#cont">Criação de contas internas</a></li>
          </ul>
		 </li>
		 
			<li><a><i class="fa fa-user-secret" aria-hidden="true"></i></a></li>
			
		</ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	  </div>
	  <div class="row">		
		<div class="bgimg-5" id="hm">
		  <div class="caption">
		  <span class="border">-x- Painel de Controle -x-</span>
		  </div>
		</div>
	  </div>			
						<div class="row">
							
					<div style="position:relative;">
						<div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
							<div class="container-fluid">
								<div class="row">
									<div class="col-md-12">
										
										
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
					
				
					
				
				
				<div class="panel-group" id="accordion" aria-multiselectable="true">
  <div class="panel panel-default">
    <div id="est" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
       <div class="row">		
		<div class="bgimg-6">
		  <div class="caption">
		  <span class="border">Estoque</span>
		  </div>
		</div>
	  </div>			
						<div class="row">
							
					<div style="position:relative;">
						<div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
							<div class="container-fluid">
								<div class="row">
									<div class="col-md-12">
										
										
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
      </div>
  </div>
  <div class="panel panel-default">
    <div id="rel" class="panel-collapse collapse" aria-labelledby="headingTwo">
       <div class="row">		
		<div class="bgimg-6">
		  <div class="caption">
		  <span class="border">Relatórios</span>
		  </div>
		</div>
	  </div>			
						<div class="row">
							
					<div style="position:relative;">
						<div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
							<div class="container-fluid">
								<div class="row">
									<div class="col-md-12">
										
										
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
      </div>
  </div>
  <div class="panel panel-default">
    <div id="cli" class="panel-collapse collapse" aria-labelledby="headingThree">
       <div class="row">		
		<div class="bgimg-6">
		  <div class="caption">
		  <span class="border">Clientes</span>
		  </div>
		</div>
	  </div>			
						<div class="row">
							
					<div style="position:relative;">
						<div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
							<div class="container-fluid">
								<div class="row">
									<div class="col-md-12">
										
										
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
    </div>
  </div>
</div>
		
		
								<!-- área das Páginas Pop-Up -->
								
								<!-- Large modal -->
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg" id="modal1">Large modal</button>

									<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
									  <div class="modal-dialog modal-lg" role="document">
										<div class="modal-content">
										  ...
										</div>
									  </div>
									</div>

												<!-- Large modal 2 -->
										<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg" id="modal2">Large modal</button>

										<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
										  <div class="modal-dialog modal-lg" role="document">
											<div class="modal-content">
											  ...
											</div>
										  </div>
										</div>

													<!-- Large modal 3 -->
											

											<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="modal3">
											  <div class="modal-dialog modal-lg" role="document">
												<div class="modal-content">
												  ...
												</div>
											  </div>
											</div>

			<!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	  	<!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
   		<script src="js/bootstrap.min.js"></script>
		</body>
</html>