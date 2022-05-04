<?php
	include"conexaovertrigo.php";
		
		$pin=$_POST["pin"];
		$login="Select * from adm where pin='$pin'";
		
		$resultado=mysqli_query($conexao,$login);
		$linha=mysqli_fetch_assoc($resultado);
	
		if ($pin=$linha ['pin']){
			echo"<script>alert('Bem vindo!')
				location.href=('housekeeping.php')</script>";
		} else {
			echo"<script>alert('Usuário ou senha incorretos.')
			location.href=('index.html')</script>";
		}
	

	

?>