<?php
  session_start();
  //require 'security_medico.php';
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
                Bem-vindo: <?php if (isset($_SESSION['email_login'])) {
      print $_SESSION['email_login'];
    }  ?> 

          </p>
            </li>
    
                 <li>
                    <a href="especialista.php ">Consultar Agenda</a>
                </li>

                <li>
                    <a href="liberar_agenda.php">Liberar Agenda</a>
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


        <h2 class="mb-4">Liberar agenda</h2>
        <form method="post" action="consulta_insert.php"m><!--form cadastro de paciente-->
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label for="inputAddress2">Dia livre para consulta</label>
                    <input type="date" class="form-control" id="pac_consulta" name="pac_consulta">
                </div>
                <div class="form-group col-md-5">
                    <label for="inputAddress2">Hora vaga</label>
                    <input type="time" class="form-control" id="pac_consulta" name="pac_consulta">
                </div>
              </div>

            <button type="submit" class="btn btn-primary">Registrar</button>
            </form>
          

		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>