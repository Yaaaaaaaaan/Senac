<?php
	
	$servidor="localhost";
	$usuario="root";
	$senha="vertrigo";
	$banco="escolabd";
	
	

	$conecta=mysqli_connect($servidor,$usuario,$senha,$banco);
	$abrelogo=mysqli_connect($servidor,$usuario,$senha,$banco);
	
	if(!$conecta){
		die("Conexão Falhou: " . mysqli_connect_error());
	}
	
	?>
	