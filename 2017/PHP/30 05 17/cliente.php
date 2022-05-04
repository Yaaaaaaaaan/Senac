<?php

	include "conexao.php";
	
	$nome=$_POST["nome"];
	$tel=$_POST["tel"];
	
	if(($nome!=" ") and ($tel!=" ")){
		$incluir="insert into cliente values(null,'$nome','$tel')";
		if(mysqli_query($conecta,$incluir)){
			echo "Dados Cadastrados com Sucesso !";
			
		}
		else{
			echo "Erro ao Cadastrar!";
			
		}
	}
	else{
		echo "<a href='cliente.html'>Voltar</a>";
	}
		
		
	
	;
	
?>
