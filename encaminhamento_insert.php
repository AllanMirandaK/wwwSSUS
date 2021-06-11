<?php
	$conexao = new pdo('sqlite:bancodedados.data');
	
	if ( isset( $_FILES['copia']['tmp_name'] ) ) {
		$copia = base64_encode(file_get_contents($_FILES['copia']['tmp_name']));
	} else {
		$copia = '';
	}
	// dados inseridos pela unidade basica
	$update = "update agenda set idAtend = '".$_REQUEST['protocoloatend']."' where id = '".$_REQUEST['idconsu']."';";
	$resultado4 = $conexao->exec($update);

	$pesquisa7 = "select datalivre, hora from agenda where id = '".$_REQUEST['idconsu']."'; ";
	$resultado6 = $conexao->query($pesquisa7)->fetchAll();
	if (count($resultado6) > 0) {
			$update2 = "update consulta set status = 'agendado para ".$resultado6[0]['datalivre']." ".$resultado6[0]['hora']."' where id = '".$_REQUEST['protocoloatend']."' ;";
			$resultado4 = $conexao->exec($update2);
		}

	print 'Inserido com sucesso.';
		print '<script>window.setTimeout(function(){window.location=\'/encaminhamento.php\';}, 2000);</script>';
?>