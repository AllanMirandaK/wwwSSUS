<?php
	
	session_start();

	if (!isset($_SESSION['email_login'])) {
		header('location:loginmedico.php');
		exit();
	} else {
		$conexao = new pdo ('sqlite:bancodedados.data');
		$select = "select * from medico where email = '".$_SESSION['email_login'].";";
		$resultado = $conexao->query($select)->fetchAll();
		if ( count($resultado) == 0 ) {
			header('location:erro_permissao.php');
			exit();
		}
	}
?>