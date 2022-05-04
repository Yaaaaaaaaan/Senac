<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AULA 05/05</title>

<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="file:///F|/TUDO/Senac/projetos/Integrador 2017.1-2/segunda aula 17-05/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">

	<style>
			#foto1{ width:100%; height:330px; background-image:url(img/foto2.jpg);background-repeat:none; float:left; margin-top:5px;}
			#foto1 span {display:none;color:#eee; width:100%; height:330px; background-image:url(img/fd_efeito_foto.png); background-repeat:repeat;}
			#foto1 span img{ float:right; }
			#foto1:hover span {display: block; cursor:pointer;}
			/*Inicia a foto-rolagem*/
			#vgeral{
			  height: 100%;
			  margin: 0;
			  font: 400 15px/1.8 "Lato", sans-serif;
			  color: #777;
			}
			.bgimg-1, .bgimg-2, .bgimg-3, .bgimg-4 , .bgimg-5, .bgimg-6{
			  position: relative;
			  opacity: 0.6;
			  background-attachment: fixed;
			  background-position: center;
			  background-repeat: no-repeat;
			  background-size: cover;

			}
			.bgimg-1 {
			  background-image:url("img/Alunoe.jpg");
			  min-height: 500px;
			}

			.bgimg-2 {
			  background-image: url("../Fotos/banner.jpg");
			  min-height: 400px;
			}
			
			.caption {
			  position: absolute;
			  left: 0;
			  top: 50%;
			  width: 100%;
			  text-align: center;
			  color: #000;
			}

			.caption span.border {
			  background-color: #111;
			  color: #fff;
			  padding: 18px;
			  font-size: 25px;
			  letter-spacing: 10px;
			}

			h3 {
			  letter-spacing: 5px;
			  text-transform: uppercase;
			  font: 20px "Lato", sans-serif;
			  color: #ddd;
			}


			.footer {
				position: fixed;
				height: 22px;
				bottom: 0;
				width: 100%;
				font-size: auto;
				color:#1E1E1E;
				background-color:rgba(194,194,194,0.75);
			}	
			
			.coisinha {
			  height: 100%;
			  padding:0px 5px 5px 5px;
			  margin-bottom: 20px;
			  background-image:linear-gradient(90deg,#fff,#f5f5f5) ;
			  border-right:1px solid #e3e3e3;
			  border-top:1px solid #e3e3e3;
			  border-bottom:1px solid #e3e3e3;
			  border-radius:0px 4px 4px 0px;
			  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
					  box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
						overflow:hidden;
			}

			
		</style>

    <?php
session_start();
include "conexao.php";
if (isset($_POST["salvar"]))
{
	$nome=$_REQUEST["nome"];
	$cpf=$_REQUEST["cpf"];
	$resultado_ins=mysqli_query($conexao,"insert into aluno (nome,cpf) values ('$nome',$cpf)") or die(mysqli_error());
	
	if($resultado_ins)
	{
		$_SESSION["nome"]=$nome;
		$_SESSION["cpf"]=$cpf;
		echo"registrado";
	}
	else
	{
		echo"alguma coisa deu errado";
	}
	
}
if(isset($_POST["consultar"]))
{
	$cpf=$_REQUEST["cpf"];
	$resultado_cons=mysqli_query($conexao,"select * from aluno where cpf=$cpf") or die(mysqli_error());
	$registro=mysqli_fetch_array($resultado_cons);
	if($registro)
	{
		$mat=$registro['mat'];
		$nome=$registro['nome'];
		$cpf=$registro['cpf'];
		$_SESSION["mat"]=$mat;
		$_SESSION["nome"]=$nome;
		$_SESSION["cpf"]=$cpf;
		
	}
	else
	{
		echo"houve algum erro";
	}
}
if (isset($_POST["editar"]))
{
	$cpf=$_POST["cpf"];
	$nome=$_POST["nome"];
	
	$resultado_editar=mysqli_query($conexao,"update aluno set cpf=$cpf,nome='$nome' where cpf=$cpf") or die(mysqli_error());
	
	if($resultado_editar)
	{
		echo"Dados Editados";
	}
	else
	{
		echo"Erro ao Editar";
	}
	
}
if (isset($_POST["excluir"])){
	
	$cpf=$_POST["cpf"];
	$resultado_excluir=mysqli_query($conexao,"delete from aluno where cpf=$cpf");
	
	
	if($resultado_excluir)
	{
		echo"Dados excluidos com sucesso";
	}
	else
	{
		echo"Erro ao Excluir";
	}
	
}
if(isset($_POST["aparelho"]))
{
header("Location: aparelho.php"); 
}
if(isset($_POST["sair"]))
{
session_destroy(); 
header("Location: primeiro.php"); 
}

error_reporting(E_ALL & ~ E_NOTICE);

?>

</head>
<body>
  <div class="container-fluid"> 
   	<div class="row">
   	<div class="col-md-3"></div>
   	<div class="col-md-6">
    		<form name="teste" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    			<p><label for="mat">Matrícula</label><input class="form-control" type="text" readonly="readonly" value="<?php echo $mat;?>" placeholder="Aparecerá a matrícula aqui." name="mat"></p>
       				<p><label for="nome">Nome</label><input class="form-control" type="text" value="<?php echo $nome;?>" placeholder="Insira o nome aqui." name="nome"></p>
       					<p><label for="cpf">CPF</label><input class="form-control" type="text" value="<?php echo $cpf;?>" placeholder="Insira o cpf aqui." name="cpf"></p>
        		
        				
        									<p><button type="button submit" name="excluir" class="btn btn-danger pull-right" style="margin-left: 5px"> Excluir</button></p>
        									
        										<p><button type="button submit" name="salvar" class="btn btn-success pull-right" style="margin-left: 5px"> Salvar</button></p>
        											
        											<p><button type="button submit" name="consultar" class="btn btn-info pull-right" style="margin-left: 5px"> Consultar</button></p>
        											
        												<p><button type="button submit" name="editar" class="btn btn-warning pull-right" style="margin-left: 5px"> Editar</button></p>
    		</form>
		</div>
	</div>
 </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
</body>
</html>
