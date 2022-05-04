<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "banco";
$conexao=mysqli_connect($host,$usuario,$senha,$bd);

	if(!$conexao){
		die("erro na conexão" .mysqli_error());
	}


?>