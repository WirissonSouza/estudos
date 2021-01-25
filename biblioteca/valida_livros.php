<?php

	if(!empty($_POST['nome-livro']) && !empty($_POST['autor-livro']) && !empty($_POST['qtd-livro']) && !empty($_POST['paginas-livro']) && !empty($_POST['ano-livro'])) {

		require_once ('conexao.php');


	    $stmt = $conexao->prepare('INSERT INTO livros(nome, autor, quant, paginas, ano) VALUES(:nome, :autor, :quant, :paginas, :ano)');
	    $stmt->bindValue(':nome', $_POST['nome-livro']);
	    $stmt->bindValue(':autor', $_POST['autor-livro']);
	    $stmt->bindValue(':quant', $_POST['qtd-livro']);
	    $stmt->bindValue(':paginas', $_POST['paginas-livro']);
	    $stmt->bindValue(':ano', $_POST['ano-livro']);
	    $stmt->execute();
		header('Location: newbook.php?inclusao=1');


	}
	else{
		header('Location: newbook.php?inclusao=2');
	}

  ?>
