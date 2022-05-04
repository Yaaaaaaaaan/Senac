<?php
include"conexaovertrigo.php";
$email=$_POST["email"];
$nome=$_POST["nome"];
$sobrenome=$_POST["sobrenome"];
$bday=$_POST["bday"];
$cpf=$_POST["cpf"];
$rg=$_POST["rg"];
$cep=$_POST["cep"];
$num=$_POST["num"];
$compl=$_POST["compl"];
$user=$_POST["user"];
$senha=$_POST["senha"];
$bday=date('d/m/y');

$inserir=mysqli_query($conexao,"insert into cliente(nome,sobrenome,bday,email,cpf,rg,cep,num,compl,usua,senha) values('$nome','$sobrenome','$bday','$email','$cpf','$rg','$cep',$num,'$compl','$user','$senha')")or die(mysqli_error());

if($inserir){
				
				echo"<script>alert('Cadastrado com sucesso')
				location.href=('lindex.php')</script>";
			}

			else{
				echo"Erro";
				echo"<script>alert('Erro no cadastro')
				location.href=('index.html')</script>";
			}
	

?>