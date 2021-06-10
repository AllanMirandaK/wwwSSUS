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


        <h2 class="mb-4">Cadastrar Paciente</h2>
          
        <form onsubmit="validarCPF('cpf')" method="post" action="paciente_insert.php"><!--form cadastro de paciente-->
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputEmail4">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do paciente">
                </div>
                <div class="form-group col-md-6">
                <label for="inputPassword4">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" maxlength="11" onkeypress="$(this).mask('000.000.000-00')">
                </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputAddress">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Rua tal, n 000">
            </div>
            <div class="form-group col-md-6">
                <label for="inputAddress2">Complemento</label>
                <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Apartamento, hotel, casa, etc.">
            </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputCity">Nº cartão do sus</label>
                <input type="text" class="form-control" id="cartaosus" name="cartaosus" placeholder="Cartão do sus do paciente">
                </div>
                <div class="form-group col-md-3">
                <label for="genero">Gênero</label>
                <select id="genero" name="genero" class="form-control">
                    <option selected>Escolher...</option>
                    <option value="Feminino">Feminino</option>
                    <option value="Masculino">Masculino</option>
                </select>
                </div>
                <div class="form-group col-md-3">
                <label for="cep">CEP</label>
                <input type="text" class="form-control" id="cep" name="cep" placeholder="00.000-000" onkeypress="$(this).mask('00.000-000')">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">CADASTRAR</button>
            </form>


      </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript" src="js/validaCPF.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

  </body>
</html>