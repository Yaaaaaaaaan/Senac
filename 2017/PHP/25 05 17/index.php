<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AULA 05/05</title>

<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="file:///F|/TUDO/Senac/projetos/Integrador 2017.1-2/segunda aula 17-05/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php
				error_reporting(E_ALL & ~ E_NOTICE);
	
	session_start();
	include"conexao.php";
	
		if (isset($_POST["salvar"])){//se clicar no botão salvar
		
			$nome=$_REQUEST["nome"]; // método request = resgata a informação do banco
				$tel=$_REQUEST["tel"];
					
					$inserir=mysqli_query($conexao,"insert into cliente(nome,tel) values('$nome','$tel')");

		}
	
			?>
</head>
<body>
  <div class="container-fluid"> 
   	<div class="row">
   	<div class="col-md-3"></div>
   	<div class="col-md-6">
    		<form name="cliente" method="post" action="operacao.php">
    			
       				<p><label for="nome">Nome</label><input class="form-control" type="text" value="<?php echo $nome;?>" placeholder="Insira o nome aqui." name="nome"></p>
       					<p><label for="tel">tel</label><input class="form-control" type="text" value="<?php echo $tel;?>" placeholder="Insira o tel aqui." name="tel"></p>
        										<p><button type="button submit" name="salvar" class="btn btn-success pull-right" style="margin-left: 5px"> Salvar</button></p>
    		</form>
		</div>
	</div>
 </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
</body>
</html>
