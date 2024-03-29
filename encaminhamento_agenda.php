<?php
  session_start();
  //require 'security_medico.php';

  $conn = new pdo('sqlite:bancodedados.data');

  $idcliente = $_GET['id'];


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
                  <a href="logout.php">Sair</a>
            </li>
          </ul>

          <div class="footer">
          
          </div>

        </div>
      </nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <h2 class="mb-4">Agendar Especialista</h2>
        <div class="container">
          <form method="post" action="encaminhamento_insert.php"m><!--form cadastro de paciente-->
            <div class="form-row">
              </div>
              <div class="mb-3">
                
                <label for="descricao">Protocolo:</label>
                <textarea class="form-control " id="protocoloatend" name="protocoloatend" placeholder="insira aqui o protocolo do atendimento"></textarea>
              </div>
              <textarea hidden name="idconsu" id="idconsu"><?=$_REQUEST['id']?></textarea>
            <button type="submit" class="btn btn-primary">Finalizar</button>
            </form>
        </div>

      </div>


      </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>