<?php
  session_start();
  //require 'security_medico.php';

  $conn = new pdo('sqlite:bancodedados.data');

  $idcliente = $_GET['id'];


  $pesquisaDados = "select * from consulta where id = '".$idcliente."'; ";
  $resultadoDados = $conn->query($pesquisaDados)->fetchAll();

  $update2 = "update consulta set clinico = '".$_SESSION['email_login']."' where id = '".$idcliente."';";
  $resultado4 = $conn->exec($update2);

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

        <h2 class="mb-4">Atender Consulta</h2>
        <div class="container">
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th colspan="5">Dados Paciente</th>
              </tr>
              <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Endereco</th>
                <th>Nº cartão SUS</th>
                <th>Gênero</th>
              </tr>
            </thead>
            <tbody>
              <?php
                  $sql = "select nome, cpf, endereco, cartaosus, genero from paciente where cpf = '".$resultadoDados[0]['cpf_pac']."'; ";
                  $rs = $conn->query($sql);
                  while ( $row = $rs->fetch(PDO::FETCH_BOTH) ) {
              ?>
              <tr>
                <td><?=$row['nome']?></td>
                <td><?=$row['cpf']?></td>
                <td><?=$row['endereco']?></td>
                <td><?=$row['cartaosus']?></td>
                <td><?=$row['genero']?></td>
              </tr>
<?php
      }
?>            
              
            </tbody>
          </table>
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th colspan="5">Dados Atendimento</th>
              </tr>
              <tr>
                <th>Protocolo</th>
                <th>Descrição</th>
                <th>Clinico</th>
              </tr>
            </thead>
            <tbody>
              <?php
                  $sql = "select id, descricao, clinico from consulta where id = '".$idcliente."'; ";
                  $rs = $conn->query($sql);
                  while ( $row = $rs->fetch(PDO::FETCH_BOTH) ) {
              ?>
              <tr>
                <td><?=$row['id']?></td>
                <td><?=$row['descricao']?></td>
                <td><?=$row['clinico']?></td>
              </tr>
<?php
      }
?>            
              <tr>
                <td colspan="5"></td>
              </tr>
            </tbody>
          </table>
          <form method="post" action="med_finalatend.php"m><!--form cadastro de paciente-->
            <div class="form-row">
                
              </div>
              <div class="mb-3">
                
                <label for="descricao">Fechamento:</label>
                <textarea class="form-control " id="descFechamento" name="descFechamento" placeholder="Descreva aqui um fechamento de atendimento ou faça o encaminhamento"></textarea>
                <label for="encaminhamento">Encaminhamento: </label>
                <select>
                  <option value="nenhum" selected>Nenhum</option>
                  <option value="cadiologista">Cardiologista</option>
                  <option value="oftalmologista">Oftalmologista</option>
                  <option value="otorrino">Otorrinolaringologista</option>
                </select>
              </div>
              <textarea hidden name="escondeId" id="escondeId"><?=$idcliente?></textarea>
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