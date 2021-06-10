<?php
  session_start();
  //require 'security_medico.php';

  $conn = new pdo('sqlite:bancodedados.data');
  ?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<link rel="stylesheet" type="text/css" href="css/paciente_proto.css">
		<title>Consultar Protocolo</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


	</head>
	<body>
		<div class="card-maior">

			
			<div class="box">
			<p class="log">SSUS</p>
				<p class="duvidas">Dúvidas| Mais sobre nós | Contate-nos</p>
				<button type="button" class="btn btn-outline-success login">Login</button>

			<p class="titulo">SSUS</p>

			<p class="subtitulo">Insira seu protocolo para saber mais sobre o mesmo:</p>

			<div id="tabelaPesquisa">
			
			<table class="table">
            <thead>
			<tr>
					<th scope="col">Protocolo</th>
					<th scope="col">Nome</th>
					<th scope="col">Situação</th>
			</tr>
			
		</thead>
            <tbody>
			   				
			  <?php
					$sql = "select id, nome_pac, situacao from consulta where id = ''; ";
					$sql2 = "select id, nome_pac, status from consulta where id = '".$_REQUEST['txtBusca']."'; ";
					$rs2 = $conn->query($sql2);
					while ( $row = $rs2->fetch(PDO::FETCH_BOTH) ) { 
				?>
				<tr>
					<td><?=$row['id']?></td>
					<td><?=$row['nome_pac']?></td>
					<td><?=$row['status']?></td>
				</tr> 
				<?php 
			}
			?>
			  </tbody>
			</table>
		</div>

			</div>

			
		</div>

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>