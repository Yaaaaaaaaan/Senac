<!doctype html>
<html>
<head>
	<title>aula</title>
	
</head>
<body>

<?php

	session_start();
		
	include "conexao.php";

	
	
	$email=$_POST["email"];
	$senha=$_POST["senha"];
	
	$sql="select * from usuarios where email='$email'
			and senha='$senha'";
	
	$resultado=mysqli_query($conecta,$sql);
	$linha=mysqli_fetch_assoc($resultado);
	
	//verifica se houve valor na variável linha, ou seja,
	//ela encontrou dados no banco
	if(isset($linha)){
		//associa o valor do campo usuario do banco a variável 
		//usuario da sessão aberta
		$_SESSION['usuario']=$linha['usuario'];
		//associa o valor do campo nível do banco a variável 
		//nivel da sessão aberta
		$_SESSION['nivel']=$linha['nivel'];
		
		if($_SESSION['nivel']==1){
			header("Location:index.php");
			
		}elseif($_SESSION['nivel']==2){
			header("Location:index2.php");
		}
	}	
	else{
		header("Location:login.php");
	}
	
	
	
	
	
	
	?>
	
	</body>
	</html>
	