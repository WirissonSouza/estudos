<?php

	function pesquisaLivro(){

	$stmt = $conexao->prepare('SELECT * FROM livros WHERE nome = :nome, autor = :autor, ano = :ano');
	$stmt->bindValue(':nome', $_POST['nome-livro']);
	$stmt->bindValue(':autor', $_POST['autor-livro']);
	$stmt->bindValue(':ano', $_POST['ano-livro']);
	$stmt->execute();
	$resultado = $stmt->fetch();

	return $resultado;
	header('Location: consultar.php?pesquisa=1');
	}

	

?>