<?php
	$conexao = new pdo('sqlite:bancodedados.data');
	//$drop = "drop table if exists paciente; ";
	//$conexao->exec($drop); 
	$create = "create table if not exists consulta (id integer primary key autoincrement, cpf_pac text, data_cons date, descricao text, status text, fechamento text, clinico text, encaminhamento text, especialista text, data_esp text); ";
	$conexao->exec($create);
	//$create = "create table if not exists triagem (id integer primary key autoincrement, paciente integer, celsius integer, bpm integer, pas integer, pad integer, historia text, avaliacao integer, datahora timestamp); ";
	//$conexao->exec($create);
	if ( isset( $_FILES['copia']['tmp_name'] ) ) {
		$copia = base64_encode(file_get_contents($_FILES['copia']['tmp_name']));
	} else {
		$copia = '';
	}
	// dados inseridos pela unidade basica
	$insert = "insert into consulta values (null, '".$_REQUEST['cpf_pac']."', '".$_REQUEST['pac_consulta']."', '".$_REQUEST['descricao']."', 'aguardando atendimento', ' ', ' ', ' ', ' ', ' ' );";
	$resultado1 = $conexao->exec($insert);
	
	if ( $resultado1 > 0 ) {
		$conexao = new pdo('sqlite:bancodedados.data');
		$pesquisa = "select * from paciente where cpf = '".$_REQUEST['cpf_pac']."'; ";
		$resultado = $conexao->query($pesquisa)->fetchAll();
		if (count($resultado) > 0) {
			print 'Inserido com sucesso.';
			print '<script>window.setTimeout(function(){window.location=\'/cad_consulta.php\';}, 2000);</script>';
		} else {
			$update = "update consulta set status = 'finalizado' where cpf_pac = '".$_REQUEST['cpf_pac']."' and status = 'aguardando atendimento';";
			$resultado3 = $conexao->exec($update);
			print 'Paciente não cadastrado, cadastre o mesmo primeiro.';
			print '<script>window.setTimeout(function(){window.location=\'/cad_paciente.php\';}, 2000);</script>';		}
		
	} else {
		print 'Erro na inserção.';
	}
?>