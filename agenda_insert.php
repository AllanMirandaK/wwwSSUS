<?php
	session_start();
	$conexao = new pdo('sqlite:bancodedados.data');

	$create = "create table if not exists agenda (id integer primary key autoincrement, datalivre date, hora time, tipo text, medico text, local text, idAtend); ";
	$conexao->exec($create);

	if ( isset( $_FILES['copia']['tmp_name'] ) ) {
		$copia = base64_encode(file_get_contents($_FILES['copia']['tmp_name']));
	} else {
		$copia = '';
	}

	$insert = "insert into agenda values (null, '".$_REQUEST['dataLivre']."', '".$_REQUEST['horaLivre']."', '".$_REQUEST['tipo']."', '".$_SESSION['email_login']."', '".$_REQUEST['localConsulta']."', 'livre' );";
	$resultado1 = $conexao->exec($insert);

	if ( $resultado1 > 0 ) 
	{
		print 'Horário liberao com sucesso.';
		print '<script>window.setTimeout(function(){window.location=\'/liberar_agenda.php\';}, 2000);</script>';
	} else {
		print 'Erro na inserção.';
	}
?>