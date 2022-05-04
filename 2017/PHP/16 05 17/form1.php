<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

	<?php
	$nome=$_POST["nome"];
	$idade=$_POST["idade"];
	echo "Nome do cliente $nome sua idade $idade";
	
	if($idade>=16){
		echo "<br> Cliente eleitor!";		
	}
	
	
	else{
		echo "<br> Cliente ainda não é eleitor.";
	}
	?>

</body>
</html>