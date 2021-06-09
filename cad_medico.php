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


        <h2 class="mb-4">Cadastrar Médico</h2>
          
        <form method="post" action="medico_insert.php"><!--form cadastro de paciente-->
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputEmail4">Nome do médico</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
                </div>
                <div class="form-group col-md-6">
                <label for="inputPassword4">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF do médico">
                </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputAddress">Especialidade</label>
                <input type="text" class="form-control" id="especialidade" name="especialidade" placeholder="Clínico geral, Pediatra">
                </div>
                <div class="form-group col-md-6">
                <label for="inputAddress2">CRM</label>
                <input type="text" class="form-control" id="crm" name="crm" placeholder="Nº crm ">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="booleanesp">Tipo:</label>
                <select id="booleanesp" name="booleanesp" class="form-control">
                    <option selected>Escolher...</option>
                    <option value="especialista">Clinico Geral</option>
                    <option value="medico">Especialista</option>
                </select>
                </div>
              
                <div class="form-group col-md-6">
                &nbsp
                </div>
            </div>

            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputAddress">E-mail</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                <label for="inputAddress2">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputCity">Nacionalidade</label>
                <input type="text" class="form-control" id="nacionalidade" name="nacionalidade" placeholder="Nacionalidade paciente">
                </div>
              
                <div class="form-group col-md-6">
                <label for="inputAddress2">Data nascimento</label>
                <input type="date" class="form-control" id="dnasc" name="dnasc">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>


      </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>