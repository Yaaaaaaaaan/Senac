<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Atividade 1</title>
</head>

<body>
<?php
	
	$cor=$_POST["cor"];
	switch($cor){
			
		case "verde":
				echo "Verde significa a fauna (natureza exuberante com seus diversos ambientes.)";
			break;
			
		case "amarelo":
			
			echo "Amarelo significa a riqueza (OURO) presente no território.";
			break;
			
		case "azul":
			echo "Azul significa os céus e seus rios.";
			break;
			
		case "branco": 
			echo"Branco Significa a PAZ.";
			break;
	}
	
?>

</body>
</html>