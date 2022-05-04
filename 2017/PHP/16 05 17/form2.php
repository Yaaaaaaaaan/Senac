<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>form 2.php</title>
</head>

<body>
<?php
	$valor=$_POST["valor"];
	switch($valor){
			
		case 1:
				echo "Valor ordinário é primeiro.";
			break;
			
		case 2:
			
			echo "Valor ordinário é segundo.";
			break;
			
		case 3:
			echo "Valor ordinário é terceiro.";
			break;
			
		case 4: 
			echo"Valor inválido.";
			break;
	}
	
	
?>
</body>
</html>