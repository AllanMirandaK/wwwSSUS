<?php
	$conexao = new pdo('sqlite:bancodedados.data');
	//$drop = "drop table if exists paciente; ";
	//$conexao->exec($drop);
	$create = "create table if not exists paciente (id integer primary key autoincrement, nome text, cpf text unique, endereco text, complemento text, cartaosus text, genero text, cep text); ";
	$conexao->exec($create);
	//$create = "create table if not exists triagem (id integer primary key autoincrement, paciente integer, celsius integer, bpm integer, pas integer, pad integer, historia text, avaliacao integer, datahora timestamp); ";
	//$conexao->exec($create);
	if ( isset( $_FILES['copia']['tmp_name'] ) ) {
		$copia = base64_encode(file_get_contents($_FILES['copia']['tmp_name']));
	} else {
		$copia = '';
	}
	
	$insert = "insert into paciente values (null, '".$_REQUEST['nome']."', '".$_REQUEST['cpf']."', '".$_REQUEST['endereco']."', '".$_REQUEST['complemento']."', '".$_REQUEST['cartaosus']."', '".$_REQUEST['genero']."', '".$_REQUEST['cep']."' );";
	$resultado1 = $conexao->exec($insert);
	/*$pid = "select max(id) pid from paciente;";
	$pid = $conexao->query($pid)->fetchAll();
	$pid = $pid[0]['pid'];
	$insert = "insert into triagem values (null, '".$pid."', null, null, null, null, null, null, null);";
	$resultado2 = $conexao->exec($insert);*/
	if ( $resultado1 > 0 ) {
		print 'Inserido com sucesso.';
		print '<script>window.setTimeout(function(){window.location=\'/cad_paciente.php\';}, 2000);</script>';
	} else {
		print 'Erro na inserção.';
	}
?>