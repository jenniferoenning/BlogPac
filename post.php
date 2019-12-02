<?php 

	require 'connection.php';
	//TODO checar se post tem todos os campos.
	if($_POST){
		

		$database->insert('post', [
		    'content' => $_POST['content'],
		    'title' => $_POST['title'],
		    'name' => $_POST['name'],
		]);
	}
	else{
		header('Location: /home.php');
	}


?>