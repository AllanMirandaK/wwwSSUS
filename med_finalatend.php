<?php
	$conexao = new pdo('sqlite:bancodedados.data');


	if ( isset( $_FILES['copia']['tmp_name'] ) ) {
		$copia = base64_encode(file_get_contents($_FILES['copia']['tmp_name']));
	} else {
		$copia = '';
	}
	
	if ($_REQUEST['encaminhamento'] == 'nenhum') {
		$update = "update consulta set status = 'finalizado' where id = '".$_REQUEST['escondeId']."';";
		$resultado = $conexao->exec($update);
		$update2 = "update consulta set fechamento = '".$_REQUEST['descFechamento']."' where id = '".$_REQUEST['escondeId']."';";
		$resultado2 = $conexao->exec($update2);
		print 'Finalizado com sucesso.';
		print '<script>window.setTimeout(function(){window.location=\'/medico.php\';}, 2000);</script>';
	} else {
		$update = "update consulta set status = 'aguardando agendamento' where id = '".$_REQUEST['escondeId']."';";
		$resultado = $conexao->exec($update);
		print 'Encaminhado para agendamento';
		print '<script>window.setTimeout(function(){window.location=\'/medico.php\';}, 2000);</script>';
	}
?>