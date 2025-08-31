<?php 

	$pdo = new PDO('mysql:host=localhost;dbname=modulo_7','root','');

	// declarando a variável

	$id = 2;

	// executando o update na tabela do banco quando o id do banco for igual ao id informado
	/*
	$sql = $pdo->prepare("UPDATE `clientes` SET nome='Auri',sobrenome='Leitão' WHERE id=$id");
	*/

	// executando o update na tabela do banco quando o nome informado for igual a coluna do banco selecionada (método 'e')
	/*
	$sql = $pdo->prepare("UPDATE `clientes` SET nome ='Sher',sobrenome='Lima' where nome='Auri' and sobrenome='Leitão'");
	*/

	// executando o update na tabela do banco quando o nome informado for igual a primeira condição ou igual a segunda condição coluna do banco selecionada (método AND='e' e OR='ou')

	$sql = $pdo->prepare("UPDATE `clientes` SET nome='Marcos',sobrenome='Paulo' WHERE nome='CAROL' OR nome='Sher'");

	// if execute o comando quando o item for igual ao comando passado

	if ($sql->execute()) {
		echo 'Meu cliente foi atualizado com sucesso!';
	}
 ?>