<?php
	include"conexaovertrigo.php";
		
		$user=$_POST["user"];
		$senha=$_POST["senha"];
	
	$login="select * from cliente where user='$user' and senha='$senha'";
	
	$resultado=mysqli_query($conexao,$login);
	$linha=mysqli_fetch_assoc($resultado);
	
	if($user=$linha ['user'] && $senha=$linha ['senha']){
			
				
				echo"<script>alert('Conectado!')
				location.href=('lindex.php')</script>";
		}

			else{
				echo"<script>alert('Usuário ou senha incorretos')
				location.href=('index.html')</script>";
			}

?>