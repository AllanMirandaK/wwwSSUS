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


        <h2 class="mb-4">Cadastrar Consulta Clínico Geral</h2>
          
        <form><!--form cadastro de paciente-->
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">CPF</label>
                  <input type="text" class="form-control" id="cpf" placeholder="CPF paciente">
                </div>

                <div class="form-group col-md-3">
                    <label for="inputAddress2">Data da consulta</label>
                    <input type="date" class="form-control" id="pac_consulta">
                </div>
              </div>
              <div class="mb-3">
                <label for="descricao">Descrição</label>
                <textarea class="form-control " id="descricao" placeholder="Descreva uma breve descrição dos sintomas do paciente" required></textarea>
                <div class="invalid-feedback">
                </div>
              </div>

            <button type="submit" class="btn btn-primary">Entrar</button>
            </form>


      </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>