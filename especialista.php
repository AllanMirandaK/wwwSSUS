<?php
  session_start();
  //require 'security_medico.php';

  $conn = new pdo('sqlite:bancodedados.data');
  ?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Minha Agenda</title>
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


        <h2 class="mb-4">Minha agenda</h2>
          

            <div class="container">
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th colspan="5">Atendimentos Agendados</th>
              </tr>
              <tr>
                <th>Nome</th>
                <th>Descricao</th>
                <th>Data Consulta</th>
                <th>Atender</th>
              </tr>
              <?php
                  $sql = "select id, nome_pac, data_cons, descricao from consulta where status like '%agendado %' and especialista = '".$_SESSION['email_login']."'; ";
                  $rs = $conn->query($sql);
                  while ( $row = $rs->fetch(PDO::FETCH_BOTH) ) {
              ?>
              <tr>
                <td><?=$row['nome_pac']?></td>
                <td><?=$row['descricao']?></td>
                <td><?=$row['data_cons']?></td>
                <td><a href="esp_atend.php?id=<?=$row['id']?>"> X </a></td>
              </tr>
<?php
      }
?>

              

            </tbody>
          </table>
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th colspan="5">Horários Livres</th>
              </tr>
              <tr>
                <th>ID</th>
                <th>Data</th>
                <th>Horário</th>
                <th>Local</th>
              </tr>
              <?php
                  $sql2 = "select id, datalivre, hora, local from agenda where idAtend = 'livre' and medico = '".$_SESSION['email_login']."'; ";
                  $rs3 = $conn->query($sql2);
                  while ( $row3 = $rs3->fetch(PDO::FETCH_BOTH) ) {
              ?>
              <tr>
                <td><?=$row3['id']?></td>
                <td><?=$row3['datalivre']?></td>
                <td><?=$row3['hora']?></td>
                <td><?=$row3['local']?></td>
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


