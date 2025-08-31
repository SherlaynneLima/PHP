<?php 

	//conectando-se ao banco
	$pdo = new PDO('mysql:host=localhost;dbname=modulo_7','root','');

	$id = 2;

	//Deletar um item no banco de dados
	//Protegendo contra ataque basta colocar no id depois do where um ponto de interrogação(WHERE id=?) e dentro do if ($sql->execute(array($id))) {
	
	$sql = $pdo->prepare("DELETE FROM `clientes` WHERE id=$id");

	if ($sql->execute()) {
		echo 'Meu cliente foi deletado com sucesso!';
	}


 ?>