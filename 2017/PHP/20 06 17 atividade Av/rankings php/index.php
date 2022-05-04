<!doctype html>
<html lang="pt-br">
<head>

	<title>Controle de Cliente</title>
</head>
<body>
<?php
	session_start();
	
?>
<div id="container">
	<header>
		<h1>Controle de Clientes</h1>
		<?php
		
			if(isset($_SESSION['usuario'])){	
				echo "<h3>Usuário:".$_SESSION['usuario'];
			}
			else{
				header("location:login.php");
			}
		?>
		<form action="logout.php" method="post">
			<input type="submit" value="Sair">
		</form>
		
		
	</header>
	
	<section>
		<ul>
			<li><a href="cliente1.php">Cadastro de Cliente</a></li>
			<li><a href="consulta.php">Consulta Clientes</a></li>
		</ul>
	</section>
</div>
</body>
</html>
	
	