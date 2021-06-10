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


        <h2 class="mb-4">Consultas em andamento</h2>
          

        <div class="container">
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th>Nome</th>
                <th>Exame</th>
                <th>Situação</th>
                <th>Profissional</th>
                <th>Data Consulta</th>
                <th>Local</th>
                <th>Nº Protocolo</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Maria</td>
                <td>Tomografia</td>
                <td>Marcado</td>
                <td>Pedro</td> 
                <td>25/08/2021</td>
                <td>Unidade básica Morgado</td>
                <td>8975414541545</td>
              </tr>
          
              <tr>
                <td>Roger</td>
                <td>Raio X</td>
                <td>Aguardando</td>
                <td>Aguardando</td> 
                <td>Aguardando</td>
                <td>Aguardando</td>
                <td>5489798465132</td>

              </tr>

              <tr>
                <td>Ugo</td>
                <td>Eletrocardiograma</td>
                <td>Marcado</td>
                <td>Clóvis</td> 
                <td>09/10/2021</td>
                <td>Hospital Universitário</td>
                <td>21354687321987</td>
              </tr>
              <tr>
                <td>Regina</td>
                <td>Endoscopia</td>
                <td>Aguardando</td>
                <td>Aguardando</td> 
                <td>Aguardando</td>
                <td>Aguardando</td>
                <td>8798654654125</td>

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