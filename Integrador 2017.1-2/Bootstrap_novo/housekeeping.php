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
		  
			
			 <li role="presentation"><a href="#estoque" aria-controls="estoque" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-info-circle" aria-hidden="true"></i> Estoque</a></li>
			 <li role="separator" class="divider"></li>
			 <li role="presentation"><a href="#relatorios" aria-controls="relatorios" role="tab" data-toggle="tab"><i class="fa fa-area-chart" aria-hidden="true"></i> Relatórios</a></li>
			 <li role="separator" class="divider"></li>
			 <li role="presentation"><a href="#clientes" aria-controls="clientes" role="tab" data-toggle="tab"><i class="fa fa-address-book-o" aria-hidden="true"></i>  Clientes</a></li>
			 <li role="separator" class="divider"></li>
          </ul>
		 </li>
			
				<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></a>
          <ul class="dropdown-menu">
           	<li><a data-toggle="modal" data-target=".bs-example-modal-lg" href="#ra"><i class="fa fa-archive" aria-hidden="true"></i> Relatório de atividade contas externas</a></li>
            <li role="separator" class="divider"></li>
            <li><a data-toggle="modal" data-target=".bs-example-modal-lg" href="#i"><i class="fa fa-info-circle" aria-hidden="true"></i> Informações</a></li>
            <li role="separator" class="divider"></li>
            <li><a data-toggle="modal" data-target=".bs-example-modal-lg1" href="#cci"><i class="fa fa-folder-open" aria-hidden="true"></i> Criação de contas internas</a></li>
          </ul>
		 </li>
		 <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-secret" aria-hidden="true"> Yan </i></a>
          <ul class="dropdown-menu">
           	<li><a data-toggle="modal" data-target=".bs-example-modal-lg" href="#ra"><i class="fa fa-archive" aria-hidden="true"></i> Relatório de atividades</a></li>
            <li role="separator" class="divider"></li>
            <li><a data-toggle="modal" data-target=".bs-example-modal-lg" href="#cc"><i class="fa fa-cogs" aria-hidden="true"></i> Configurações da Conta</a></li>
            <li role="separator" class="divider"></li>
			<li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Sair</a></li>
          </ul>
		 </li>
			<li></li>
			
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
				
					
				
					
				
				<div>
  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home"></div>
    <div role="tabpanel" class="tab-pane" id="estoque">
	
	
	
		<div role="presentation"><a href="" aria-controls="home"><i class="fa fa-undo" aria-hidden="true"></i> Voltar</a></div></div>
    <div role="tabpanel" class="tab-pane" id="relatorios">
	
	
	
	<div role="presentation"><a href="" aria-controls="home"><i class="fa fa-undo" aria-hidden="true"></i> Voltar</a></div></div>
    <div role="tabpanel" class="tab-pane" id="clientes">
	
	
	
	<div role="presentation"><a href="" aria-controls="home"><i class="fa fa-undo" aria-hidden="true"></i> Voltar</a></div></div>
	
  </div>

</div>
		
		
								<!-- área das Páginas Pop-Up -->
								
								<!-- Relatório de atividade -->

									<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
									  <div class="modal-dialog modal-lg" id="ra" role="document">
										<div class="modal-content">
										  Relatório
										</div>
									  </div>
									</div>

												<!-- Informações -->

										<div class="modal fade bs-example-modal-lg" tabindex="-2" role="dialog" aria-labelledby="myLargeModalLabel">
										  <div class="modal-dialog modal-lg" id="i" role="document">
											<div class="modal-content">
											  Informações
											</div>
										  </div>
										</div>

													<!-- Configurações da conta -->
													
											<div class="modal fade bs-example-modal-lg" tabindex="-3" role="dialog" aria-labelledby="myLargeModalLabel" >
											  <div class="modal-dialog modal-lg" id="cc" role="document">
												<div class="modal-content">
												  Configuações
												</div>
											  </div>
											</div>
											
											
													<!-- Criação de contas Internas -->
													
												<div class="modal fade bs-example-modal-lg" tabindex="-4" role="dialog" aria-labelledby="myLargeModalLabel">
												  <div class="modal-dialog modal-lg" id="cci" role="document">
													<div class="modal-content">
													  Criação de contas Internas
													</div>
												  </div>
												</div>


			<!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	  	<!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
   		<script src="js/bootstrap.min.js"></script>
		</body>
</html>