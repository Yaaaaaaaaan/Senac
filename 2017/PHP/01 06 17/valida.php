<?php
		include("conexaovertrigo.php");
	$email=$_POST['email'];
	$senha=$_POST['senha'];
	$sql="select * from usuarios where email='$email' and senha='$senha'";
	
	$resultado=mysqli_query($conexao,$sql);
	$linha=mysqli_fetch_assoc($resultado);
	
		if($email=$linha ['email'] && $senha=$linha ['senha']){
			header('location:index.php');
		} else{
			header('location:login.php');
		}
?>