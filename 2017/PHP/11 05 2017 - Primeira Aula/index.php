<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
		<title>Aula 01 PHP</title>

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		
	</head>
	<body style="background:#37434A">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<?php
						echo "<font color='white'>Estamos começando a Linguagem PHP! <br>";
						
						$nome="<p>Masculino";
						$sexo="Juca<br>\n";
						
						echo "<font color='white'>O nome do aluno é <br>";
						echo $nome ,"<br>";
						
						echo "<font color='white'>O sexo do aluno é <br>";
						echo $sexo ,"<br>";
						
					?>
				</div>	
			</div><hr>	
			
				<div class="row">
					<div class="col-md-12">
						<?php
							$idade=18;
							$nome="Yan";
					
							if($idade>16) {
								echo "<font color='white'>O candidato $nome é eleitor!!";
								echo "<font color='white'><br><br> Favor encaminhar o candidato ao setor B!";
							}
							
							else {
							echo "<font color='white'>O candidato $nome não é eleitor!!";
							}
					?>
					</div>
				</div>
				<hr >
					<div class="row">
						<div class="col-md-12">
							<?php
								$valor=2;
								
									switch($valor){
										case 0:
											print "<font color='white'>Valor da variável é 0!";
												break;
										
											case 1:
												print "<font color='white'>Valor da variável é 1!";
													break;
											
												case 2:
													print "<font color='white'>Valor da variável é 2!";
														break;
														
													default: 
														print "<font color='white'>Valor inválido!";
															break;
									}
								
							?>
						</div>
					</div>	
					<hr>
						<div class="row">
							<div class="col-md-12">
								<?php
									$nome="Marcia";
									$anoNasc=1981;
									$anoAtual=2017;
									
									$idade =  $anoAtual-$anoNasc;
										echo "<font color='white'>A idade de Marcia é $idade";
									
									
								?>
							</div>
						</div>
						<hr>
							<div class="row">
								<div class="col-md-12">
									<?php
									
										echo "<center>Estamos Calculando Notas.</center><br>" ;
										$p1=4.5;
										$p2=3.0;
										$p3=10.0;
										
										$media=($p1+$p2+$p3)/3;
										
										if($media>=6){
											echo "<br> Aprovado!";
											
											echo "<br>$media é a nota final.";
										}
										else {
											echo "<br>Reprovado!";
											
											echo "<br>$media é a nota final.";
										}
									?>
								</div>
							</div>
							<hr>
		</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>