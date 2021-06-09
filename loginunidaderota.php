<?php

	session_start();

	$conexao = new pdo('sqlite:bancodedados.data');
	$pesquisa = "select * from unidade where usuario = '".$_REQUEST['usuario_login']."' and senha = '".$_REQUEST['senha_login']."'; ";
	$resultado = $conexao->query($pesquisa)->fetchAll();

	if (count($resultado) > 0) {
		$_SESSION['usuario_login'] = $_REQUEST['usuario_login'];
		header('location:atendimento.php');
		
	}
	else {

		header('location:index.php');
	}
	

?>