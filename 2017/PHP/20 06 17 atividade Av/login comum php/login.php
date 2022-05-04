<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Cadastro de Cliente</title>
</head>
<body>


<div id="container">
	<header>
		<h1>Acesso ao Sistema</h1>
	</header>
	
	<section>
		<form action="valida.php" method="post">
		
			<label for="email">Usuário
			<input type="text" name="email" placeholder="Digite seu email" required>
			
			<label for="senha">Senha
			<input type="password" name="senha" required>
			
			<input type="submit" value="Enviar Dados">
		</form>
	</section>
</div>
</body>
</html>
	
	