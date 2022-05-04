<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap - Prebuilt Layout</title>

<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<?php
		$ano_fum=$_POST["ano_fum"];
		$qtd_cig=$_POST["qtd_cig"];
		$cart_cig=$_POST["cart_cig"];
		
		$vlr_cig=$cart_cig/20;
		
		$total=$ano_fum*$vlr_cig*$qtd_cig;	
	
		echo "A quantidade de dinheiro gasto por um fumante é: $total";
			
	
	?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="../../../../../../../../Aula05.05/js/jquery-1.11.3.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="../../../../../../../../Aula05.05/js/bootstrap.js"></script>
</body>
</html>
