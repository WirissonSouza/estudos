<?php

	require_once ('bcrypt.php');
	require_once ('conexao.php');

	session_start();

	if(!empty($_POST['user']) && !empty($_POST['password'])) {

			try {
 

     		$query = "select * from usuarios where ";
     		$query .= " user = :user ";

     		$stmt = $conexao->prepare($query);

     		$stmt->bindValue(':user', $_POST['user']);

     		$stmt->execute();

     		if($stmt->rowCount() == 1){
				$usuario = $stmt->fetch();

				if (Bcrypt::check($_POST['password'], $usuario['password'])) {
	                $_SESSION['login'] = true;
	                $_SESSION['id'] = $usuario['id'];
	                $_SESSION['name'] = $usuario['name'];
	                $_SESSION['user'] = $usuario['user'];
	                header("Location: dashboard.php");
	                die();

	            }else{
	                echo '<div class="box_erro_login"><p><i class="fas fa-exclamation-circle"></i> Usuário ou senha incorretos!</p></div>';
	            }
			}else {
				echo '<div class="box_erro_login"><p><i class="fas fa-exclamation-circle"></i> Usuário não encontrado.</p></div>';
			}

 			}catch (PDOException $e){
 				echo 'Erro: '.$e->getCode().' Mensagem: '.$e->getMessage();

 			}
 		}


  ?>
