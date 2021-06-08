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
	          <li class="active">
	            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Cadastros</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu">
              <li>
                    <a href="cad_paciente.php">Cadastrar paciente</a>
                </li>
                <li>
                    <a href="cad_medico.php">Cadastrar Especialidade</a>
                </li>
                <li>
                    <a href="cad_consulta.php">Cadastrar Consulta</a>
                </li>
	            </ul>
	          </li>
	        
            <li>
                <a href="#">Atendimento para encaminhamento</a>
              </li>
	        </ul>

	        <div class="footer">
	        
	        </div>

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">


        <h2 class="mb-4">Cadastrar Paciente</h2>
          
        <form><!--form cadastro de paciente-->
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputEmail4">Nome</label>
                <input type="text" class="form-control" id="nome" placeholder="Nome do paciente">
                </div>
                <div class="form-group col-md-6">
                <label for="inputPassword4">CPF</label>
                <input type="text" class="form-control" id="cpf" placeholder="CPF do paciente">
                </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputAddress">Endereço</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Rua Leopoldo, nº 0">
            </div>
            <div class="form-group col-md-6">
                <label for="inputAddress2">Complemento</label>
                <input type="text" class="form-control" id="complemento" placeholder="Apartamento, hotel, casa, etc.">
            </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputCity">Nº cartão do sus</label>
                <input type="text" class="form-control" id="cartao" placeholder="Cartão do sus do paciente">
                </div>
                <div class="form-group col-md-3">
                <label for="inputEstado">Médico</label>
                <select id="inputEstado" class="form-control">
                    <option selected>Escolher...</option>
                    <option>...</option>
                </select>
                </div>
                <div class="form-group col-md-3">
                <label for="inputCEP">CEP</label>
                <input type="text" class="form-control" id="cep" placeholder="00.000.000-00">
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