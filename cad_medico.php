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
                    <a href="#">Cadastrar Especialidade</a>
                </li>
                <li>
                    <a href="#">Cadastrar Consulta</a>
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


        <h2 class="mb-4">Cadastrar Médico</h2>
          
        <form><!--form cadastro de paciente-->
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputEmail4">Nome do médico</label>
                <input type="text" class="form-control" id="nome" placeholder="Nome">
                </div>
                <div class="form-group col-md-6">
                <label for="inputPassword4">CPF</label>
                <input type="text" class="form-control" id="cpf" placeholder="CPF do médico">
                </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputAddress">Especialidade</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Clínico geral, Pediatra">
            </div>
            <div class="form-group col-md-6">
                <label for="inputAddress2">CRM</label>
                <input type="text" class="form-control" id="complemento" placeholder="Nº crm ">
            </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputCity">Nacionalidade</label>
                <input type="text" class="form-control" id="cartao" placeholder="Cartão do sus do paciente">
            </div>
              
            <div class="form-group col-md-6">
                <label for="inputAddress2">Data nascimento</label>
                <input type="date" class="form-control" id="data_cons">
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