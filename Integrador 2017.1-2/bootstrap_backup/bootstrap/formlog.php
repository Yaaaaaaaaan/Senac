<?php
	include"conexaovertrigo.php";
		
		$user=$_POST["usua"];
		$pass=$_POST["senha"];
	
	$sql="select * from cliente where usua='$user' and senha='$pass'";
	
	$resultado=mysqli_query($conexao,$sql);
	$linha=mysqli_fetch_assoc($resultado);
	
		if($user=$linha ['usua'] && $pass=$linha ['senha']){
			header('location:lindex.php');
		} else{
			header('location:index.html');
		}
?>