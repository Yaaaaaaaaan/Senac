<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
		include ("conexao.php");
		echo "Relatório de clientes <br><br>";
		$sql = "SELECT * FROM cliente";
		$resultado = mysqli_query($conecta, $sql);
	
			if ($resultado -> num_rows > 0){
				echo "<span class='nome'><b>Nome</b></span>
						<span class='telefone'><b>Telefone</b></span>";

					while($linha = $resultado-> fetch_assoc()){
						echo"<br><span class='nome'>".$linha["nome"]. "</span>
						<span class='nome'>".$linha["telefone"]."</span><br>";
					}
			}else {echo "<b class='erro'> não há clientes cadastrados!</b><br><br>";}
	
	?>
</body>
</html>