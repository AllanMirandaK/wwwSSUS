<?php
  session_start();
  //require 'security_medico.php';

  $conn = new pdo('sqlite:bancodedados.data');
  ?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Início</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<a href="#" class="img logo mb-5" style="background-image: url(images/logo.png);"></a>
	        <ul class="list-unstyled components mb-5">
	          <li>
                Bem-vindo <?php if (isset($_SESSION['email_login'])) {
      print $_SESSION['email_login'];
    }  ?> 
            </li>        
            <li>
                <a href="medico.php">Atendimentos do dia</a>
            </li>

            <li>
                  <a href="#">Agenda</a>
            </li>
            <li>
                  <a href="logout.php">Sair</a>
            </li>
	        </ul>

	        <div class="footer">
	        
	        </div>

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">


        <h2 class="mb-4">Atendimentos do dia</h2>
          

        <div class="container">
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th>Nome</th>
                <th>Descricao</th>
                <th>CPF</th>
                <th>Atender</th>
              </tr>
            </thead>
            <tbody>
              <?php
                  $sql = "select id, cpf_pac, data_cons, descricao, status, fechamento, clinico, encaminhamento, especialista, data_esp from consulta where status = 'aguardando atendimento'; ";
                  $rs = $conn->query($sql);
                  while ( $row = $rs->fetch(PDO::FETCH_BOTH) ) {
              ?>
              <tr>
                <td><?=$row['id']?></td>
                <td><?=$row['descricao']?></td>
                <td><?=$row['cpf_pac']?></td>
                <td><a href="aindex.php?action=update&id=<?=$row['id']?>"> X </a></td>
              </tr>
<?php
      }
?>
              

            </tbody>
          </table>
        </div>

      </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html> 