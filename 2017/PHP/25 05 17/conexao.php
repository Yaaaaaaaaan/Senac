<?php
	$login="root";
	
	$senha="vertrigo";
	
	$banco="cliente";
	
	$conexao=mysqli_connect("localhost",$login,$senha,$banco) or die(mysqli_error());
?>