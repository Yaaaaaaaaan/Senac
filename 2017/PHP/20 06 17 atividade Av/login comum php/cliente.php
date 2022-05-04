<?php

	include "conexao.php";
	
	$nome=$_POST["nome"];
	$tel=$_POST["tel"];
	
	
		$incluir="insert into cliente values(null,'$nome','$tel')";
		if(mysqli_query($conecta,$incluir)){
			echo "Dados Cadastrados com Sucesso !";
			
		}
		else{
			echo "Erro ao Cadastrar!";
			
		}
		
		echo "*******Clientes Cadastrados *******";
		
		$consulta="select * from cliente";
		$resultado=mysqli_query($conexao,$consulta) or die(mysqli_error());
	    $registro=mysqli_fetch_array($resultado);
	
		while($registro!="")
		{
			echo "Código do cliente: $registro['codcliente']<br>";
			echo "Nome :$registro['nome']<br>";
			echo "Telefone: $registro['telefone']";
				
			
		
		}
	
	
		
		
	
	
	
?>
