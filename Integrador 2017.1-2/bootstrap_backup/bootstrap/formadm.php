<?php
	include"conexaovertrigo.php";
		
		$pin=$_POST["pin"];
		
		$login=mysql_query($conexao, "Select * from adm where pin=$pin");
	while($linha=mysqli_fetch_array($login)){
		if ($linha){
			echo"<script>alert('logado com sucesso')
				location.href=('lindex.php')</script>";
		} else {
			echo"<script>alert('Usuário ou senha incorretos.')
			location.href=('index.html')</script>";
		}
	}

	

?>