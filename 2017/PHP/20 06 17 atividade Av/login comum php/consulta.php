<html>
<head>
<title>Produtos</title>
<meta charset='utf-8'/>
<link rel="stylesheet" href="estilo/estilo.css" type="text/css">
  
</head>

<body>

<?php

			session_start();
			echo"Usuário:".$_SESSION['usuario']."<br><br>";
	
include("conexao.php");
echo "Relatório de Clientes<br><br>";

$sql ="SELECT * FROM cliente";    
$resultado = mysqli_query($conecta,$sql);

if ($resultado->num_rows > 0) {
echo "<span class='nome'><b>Nome</b></span>
	  <span><b>Telefone</b></span>";
	  
while($linha = $resultado->fetch_assoc()) {
echo "<br><span class='nome'>".$linha["nome"]."</span>
<span class='nome'>".$linha["telefone"]."</span><br>";

}
} else {
echo "<b class='erro'>Não há Clientes cadastrados!
</b><br><br>";
}
	

?>
        </body>
</html>