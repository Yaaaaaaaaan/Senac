<?php
	session_start();
	include"conexao.php";
	
		if (isset($_POST["salvar"])){//se clicar no botão salvar
		
			$nome=$_REQUEST["nome"]; // método request = resgata a informação do banco
				$cpf=$_REQUEST["cpf"];
					
					$inserir=mysqli_query($conexao,"insert into aluno(nome,cpf) values('$nome','$cpf')");
			
				if($inserir)  { // se a rotina inserir for verdadeira
					$_SESSION["nome"]=$nome;
						$_SESSION["cpf"]=$cpf;
							echo "Salvo com sucesso.";
				}
			
			else
			{
				echo "há um equivoco no cadastro. ERRO##";
			}
		}


		if (isset($_POST["consultar"]))
		{
			$nome=$_REQUEST["nome"];
			$cpf=$_REQUEST["cpf"];
			
			$consultar=mysqli_query($conexao,"select *from aluno where cpf=$cpf" ) or mysqli_error("erro no sql");
			
			$linha=mysqli_fetch_array($consultar);
				
				if($linha){
				$mat=$linha["mat"];
					$cpf=$linha["cpf"];
					$nome=$linha["nome"];
					
					$_SESSION["mat"]=$mat;
					$_SESSION["cpf"]=$cpf;
					$_SESSION["nome"]=$nome;
					
					}
			
				else{
					echo "CPF não encontrado.";
				}
		}
			
		
?>
