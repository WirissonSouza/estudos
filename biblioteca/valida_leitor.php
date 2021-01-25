<?php

	if(!empty($_POST['nome']) && !empty($_POST['sobrenome']) && !empty($_POST['celular'])) {

		require_once ('conexao.php');

	    $stmt = $conexao->prepare('INSERT INTO leitores(nome, sobrenome, celular) VALUES(:nome, :sobrenome, :celular)');
	    $stmt->bindValue(':nome', $_POST['nome']);
	    $stmt->bindValue(':sobrenome', $_POST['sobrenome']);
	    $stmt->bindValue(':celular', $_POST['celular']);
	    $stmt->execute();
		header('Location: newreader.php?inclusao=1');


	}
	else{
		header('Location: newreader.php?inclusao=2');
	}

  ?>
