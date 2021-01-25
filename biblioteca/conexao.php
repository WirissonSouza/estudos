<?php

		$dns = 'mysql:host=localhost;dbname=biblioteca';
		$user = 'root';
		$password = '';

		try {
     		$conexao = new PDO($dns, $user, $password);

     	}
     	catch (PDOException $e){
 			echo 'Erro: '.$e->getCode().' Mensagem: '.$e->getMessage();
 		}



  ?>
