<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Atividade 2</title>
</head>

<body>
	<?php
	
		$aluno=$_POST["aluno"];
	$nota1=$_POST["nota1"];
	$nota2=$_POST["nota2"];
	$nota3=$_POST["nota3"];
	$nota4=$_POST["nota4"];
	
	
	$media=($nota1+$nota2+$nota3+$nota4)/4;
	
	if ($media>=6){
		echo "Aluno Aprovado. <br>";
		echo "A média do aluno é $media pontos.";
	}
	
	else {
		echo "Aluno Reprovado.";
		echo "A média do aluno é $media pontos.<br> Parece que o aluno não se esforçou.";
	}
	
	?>
</body>
</html>