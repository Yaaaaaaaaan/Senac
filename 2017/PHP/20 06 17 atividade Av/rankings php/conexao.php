<?php
	
	$servidor="localhost";
	$usuario="root";
	$senha="";
	$banco="controle_cliente";
	
	

	$conecta=mysqli_connect($servidor,$usuario,$senha,$banco);
	
	if(!$conecta){
		die("Conexão Falhou: " . mysqli_connect_error());
	}
	
	
	?>
	