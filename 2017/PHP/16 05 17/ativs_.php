<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Atividade 3</title>
</head>

<body>
<?php
	$nome=$_POST["nome"];
	$sexo=$_POST["sexo"];
	$dias=$_POST["dias"];
	$valor=$_POST["valor"];
	$diaria=$_POST["diaria"];

	$total=$dias*$diaria+$valor;
	
	if($sexo=="M"){
	echo"O Senhor $nome ficou hospedado por $dias dias, e seu valor total de gastos foram $total reais.";
	}
	else if($sexo=="F"){
	echo"A Senhora $nome ficou hospedado por $dias dias, e seu valor total de gastos foram $total reais.";	
	}
?>
</body>
</html>