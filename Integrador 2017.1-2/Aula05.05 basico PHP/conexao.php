<?php
	$login="root";
	
	$senha="vertrigo";
	
	$banco="teste";
	
	$conexao=mysqli_connect("localhost",$login,$senha,$banco) or die(mysqli_error());
?>