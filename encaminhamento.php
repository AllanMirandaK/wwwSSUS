<?php
  //session_start();
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
			
			<?php
                require 'menu.php';
            ?>


        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">          

        <div class="container">

        <h2 class="mb-4">Consultas aguardando agendamento</h2>
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th>Nº Protocolo</th>
                <th>Nome</th>
                <th>Exame</th>
                <th>Situação</th>
                <th>Profissional</th>
                <th>Data Consulta</th>
              </tr>
            </thead>
            <tbody>
              <?php
                  $sql = "select id, nome_pac, encaminhamento, status, clinico, data_cons from consulta where status = 'aguardando agendamento'; ";
                  $rs = $conn->query($sql);
                  while ( $row = $rs->fetch(PDO::FETCH_BOTH) ) {
              ?>
              <tr>
                <td><?=$row['id']?></td>
                <td><?=$row['nome_pac']?></td>
                <td><?=$row['encaminhamento']?></td>
                <td><?=$row['status']?></td>
                <td><?=$row['clinico']?></td>
                <td><?= date('d/m/Y');$row['data_cons']?></td>
              </tr>
<?php
      }
?>
              

            </tbody>
          </table>


          <h2 class="mb-4">Datas Disponíveis</h2>
          

          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th>Médico</th>
                <th>Especialidade</th>
                <th>Unidade</th>
                <th>Data</th>
                <th>Hora</th>
                <th>Ação</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Maria</td>
                <td>Pediatra</td>
                <td>Hospital Mais Viver</td>
                <td>25/06/2021</td>
                <td>15:30:00</td> 
                <td><button type="button" class="btn btn-success">+</button></td> 

              </tr>
              <tr>
                <td>Ricardo</td>
                <td>Cardiologista</td>
                <td>Unidade </td>
                <td>26/06/2021</td>
                <td>16:10:00</td>
                <td><button type="button" class="btn btn-success">+</button></td>  
              </tr>
          
              </tr>

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