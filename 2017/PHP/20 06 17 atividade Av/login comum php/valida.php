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
	
	if($email==$linha['email'] && $senha==$linha['senha']){
		$_SESSION['usuario']=$linha['usuario'];
		header("Location:index.php");
		
	}
	else{
		header("Location:login.php");
	}
	
	?>
	
	</body>
	</html>
	