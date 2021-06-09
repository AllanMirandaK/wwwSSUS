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
                <a href="encaminhamento.php">Atendimento para encaminhamento</a>
              </li>
	        </ul>

	        <div class="footer">
	        
	        </div>

	      </div>
    	</nav>

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