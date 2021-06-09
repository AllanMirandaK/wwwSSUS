<?php
	$conexao = new pdo('sqlite:bancodedados.data');
	//$drop = "drop table if exists paciente; ";
	//$conexao->exec($drop); 
	$create = "create table if not exists medico (id integer primary key autoincrement, nome text, cpf text unique, especialidade text, crm text unique, booleanesp text, email text, senha text, nacionalidade text, dnasc date); ";
	$conexao->exec($create);
	//$create = "create table if not exists triagem (id integer primary key autoincrement, paciente integer, celsius integer, bpm integer, pas integer, pad integer, historia text, avaliacao integer, datahora timestamp); ";
	//$conexao->exec($create);
	if ( isset( $_FILES['copia']['tmp_name'] ) ) {
		$copia = base64_encode(file_get_contents($_FILES['copia']['tmp_name']));
	} else {
		$copia = '';
	}
	
	$insert = "insert into medico values (null, '".$_REQUEST['nome']."', '".$_REQUEST['cpf']."', '".$_REQUEST['especialidade']."', '".$_REQUEST['crm']."', '".$_REQUEST['booleanesp']."', '".$_REQUEST['email']."', '".$_REQUEST['senha']."', '".$_REQUEST['nacionalidade']."', '".$_REQUEST['dnasc']."' );";
	$resultado1 = $conexao->exec($insert);
	/*$pid = "select max(id) pid from paciente;";
	$pid = $conexao->query($pid)->fetchAll();
	$pid = $pid[0]['pid'];
	$insert = "insert into triagem values (null, '".$pid."', null, null, null, null, null, null, null);";
	$resultado2 = $conexao->exec($insert);*/
	if ( $resultado1 > 0 ) {
		$conexao = new pdo('sqlite:bancodedados.data');
		$pesquisa = "select * from medico where email = '".$_REQUEST['email']."' and booleanesp = 'especialista'; ";
		$resultado = $conexao->query($pesquisa)->fetchAll();
		if (count($resultado) > 0) {
			$insert2 = "insert into permissao values (null, '".$_REQUEST['email']."', 'especialista' );";
			$resultado2 = $conexao->exec($insert2);
		} else {
			$insert3 = "insert into permissao values (null, '".$_REQUEST['email']."', 'medico' );";
			$resultado3 = $conexao->exec($insert3);
		}
		

		print 'Inserido com sucesso.';
		print '<script>window.setTimeout(function(){window.location=\'/cad_medico.php\';}, 2000);</script>';
	} else {
		print 'Erro na inserção.';
	}
?>