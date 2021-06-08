<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<link rel="stylesheet" type="text/css" href="css/paciente.css">
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

			<div id="divBusca">
				  <img src="../images/search.png" style="width:30px;" alt="Buscar..."/>
				  <input type="text" id="txtBusca" placeholder="Buscar..."/>
				  <button id="btnBusca">Buscar</button>
			</div>

			<div id="tabelaPesquisa">
			<table class="table">
			  <thead>
			    <tr>
			      <!--<th scope="col">#</th>-->
			      <th scope="col">Protocolo</th>
			      <th scope="col">Paciente</th>
			      <th scope="col">Status</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <!--<th scope="row">00001</th>-->
			      <td>00001</td>
			      <td>Roberto Brasileiro Triste</td>
			      <td>Aguardando agendamento</td>
			    </tr>
			    <?php
					/* $sql = "select id, title, watched from serie where netflix = 1 order by title; "; */
					if (isset($_REQUEST['pesquisa'])) {
						$sql = "select protocolo, paciente, status from consulta where protocolo like '%".$_REQUEST['pesquisa']."%' order by protocolo; ";
					}
					$rs = $conn->query($sql);
					while ( $row = $rs->fetch(PDO::FETCH_BOTH) ) {
				?>
				<tr>
					<td><?=$row['protocolo']?></td>
					<td><?=$row['paciente']?></td>
					<td><?=$row['status']?></td>
				</tr>
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