<?php
	include"conexao.php";
	
		$nome=$_POST["nome"];
		$tel=$_POST["tel"];
					
			if(($nome!=" ") and ($tel!=" ")){
					$incluir="insert into cliente values('$nome','$tel')";
					
				if (mysqli_query($conexao,$incluir)){ /*/ insere na tabela o nome e tel /*/
					echo "Dados salvos com sucesso!";
				} 
				else {echo"Erro ao cadatrar!";}
		
		
			}
	
			
		
?>
