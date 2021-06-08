<?php

	session_start();

	$conexao = new pdo('sqlite:bancodedados.data');
	$pesquisa = "select * from medico where email = '".$_REQUEST['email_login']."' and senha = '".$_REQUEST['senha_login']."'; ";
	$resultado = $conexao->query($pesquisa)->fetchAll();

	if (count($resultado) > 0) {
		$_SESSION['email_login'] = $_REQUEST['email_login'];

		$conexao2 = new pdo('sqlite:bancodedados.data');
		$pesquisa2 = "select * from permissao where usuario = '".$_REQUEST['email_login']."' and recurso = 'especialista'; ";
		$resultado2 = $conexao2->query($pesquisa2)->fetchAll();
		if (count($resultado2) > 0) {
			header('location:especialista.php');
		} else {
			header('location:medico.php');
		}
		
	}
	else {

		header('location:index.php');
	}
	

?>