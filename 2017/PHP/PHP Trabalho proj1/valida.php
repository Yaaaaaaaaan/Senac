<?php
				session_start();
				include "conexao.php";
				
				$nick=$_POST["nick"];
				$senha=$_POST["senha"];
				
				$sql="select * from usuario where nick='$nick'
						and senha='$senha'";
				
				$resultado=mysqli_query($conecta,$sql);
				$linha=mysqli_fetch_assoc($resultado);
				
				if(isset($linha)){
					
					$_SESSION['usuario']=$linha['nick'];
					
					$_SESSION['ranking']=$linha['ranking'];
					
					if($_SESSION['ranking']==1){
						header("Location:lindex.php");
						
					}else if($_SESSION['ranking']==2){
						header("Location:professor.php");
						
					}else if($_SESSION['ranking']==3){
						header("Location:administracao.php");
						
					}else if($_SESSION['ranking']==4){
						header("Location:housekeeping.php");
						
					}
				}	
				else{
					header("Location:index.php");
				}
	
			?>