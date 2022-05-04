<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Cadastro de Cliente</title>
</head>
<body>
<div id="container">
	<header>
		<?php 
			session_start();
			echo"Usuário:".$_SESSION['usuario']."<br>";
		?>
		<h1>Cadastro de Clientes</h1>
		
		
	</header>
	
	<section>
		<form action="cliente.php" method="post">
		
			<label for="nome">Nome
			<input type="text" name="nome" required>
			
			<label for="tel">Telefone
			<input type="text" name="tel" required>
			
			<input type="submit" value="Enviar Dados">
		</form>
	</section>
</div>
</body>
</html>
	
	