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


        <h2 class="mb-4">Processos em andamento</h2>
          

        <div class="container">
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th>Nome</th>
                <th>Descricao</th>
                <th>CPF</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Maria</td>
                <td>Febre e dor de cabeçca</td>
                <td>587.258.678-50</td>
               
              </tr>
          
              <tr>
                <td>Roger</td>
                <td>Dor na perna</td>
                <td>344.857.587-60</td>
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