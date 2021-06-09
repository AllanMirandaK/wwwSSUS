<?php
  session_start();
  //require 'security_medico.php';
  ?>

<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<a href="#" class="img logo mb-5" style="background-image: url(images/logo.png);"></a>
	        <ul class="list-unstyled components mb-5">
	          <li >
                Bem-vindo <?php if (isset($_SESSION['usuario_login'])) {
      print $_SESSION['usuario_login'];
    }  ?> 
            </li>
	          <li >
	            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Cadastros</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu">
               
              <li>
                    <a href="cad_paciente.php">Cadastrar Paciente</a>
                </li>
                <li>
                    <a href="cad_medico.php">Cadastrar Médico</a>
                </li>
                <li>
                    <a href="cad_consulta.php">Cadastrar Consulta</a>
                </li>

	            </ul>
	          </li>
	        
            <li>
                <a href="encaminhamento.php">Atendimento para encaminhamento</a>
              </li>
              <li>
                  <a href="logout.php">Sair</a>
            </li>
	        </ul>

	        <div class="footer">
	        
	        </div>

	      </div>
    	</nav>