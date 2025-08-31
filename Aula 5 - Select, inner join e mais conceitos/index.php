<?php 

	$pdo = new PDO('mysql:host=localhost;dbname=modulo_7','root','');
	/*
	$sql = $pdo->prepare("SELECT * FROM posts");

	$sql->execute();

	// fetchALL = quer dizer que vou pegar todas as informações que tem na query passada acima
	$info = $sql->fetchAll();
	*/
	//para conseguir manipular as informações só fazer foreach ou for
	//foreach
	/*
	foreach ($info as $key => $value) {
		echo 'Título: ' .$value['titulo'];
		echo '<br/>';
		echo 'Notícia: ' .$value['conteudo'];
		echo '<hr>';
	}
	*/

	//for
	/*
	for ($i=0; $i < count($info); $i++) { 
		echo 'Título: ' .$info[$i]['titulo'];
		echo '<br/>';
		echo 'Notícia: ' .$info[$i]['conteudo'];
		echo '<hr>';
	}
	*/

	//puxando apenas uma categoria através do que digitamos no link do navegador
	//http://localhost/V%C3%ADdeo_07_PHP/Aula%205%20-%20Select,%20inner%20join%20e%20mais%20conceitos/index.php?categoria_id=2
/*
	$sql = $pdo->prepare("SELECT * FROM posts WHERE categoria_id = ?");

	$sql->execute(array($_GET['categoria_id']));

	// fetchALL = quer dizer que vou pegar todas as informações que tem na query passada acima
	$info = $sql->fetchAll();

	foreach ($info as $key => $value) {
		echo 'Título: ' .$value['titulo'];
		echo '<br/>';
		echo 'Notícia: ' .$value['conteudo'];
		echo '<hr>';
}
*/
	/*
	$sql = $pdo->prepare("SELECT * FROM categorias");

	$sql->execute();

	$info = $sql->fetchAll();

	foreach ($info as $key => $value) {
		$categorias_id = $value['id'];
		echo 'Exibindo posts de: ' .$value['nome'];
		echo '<br />';
		$sql = $pdo->prepare("SELECT * FROM posts WHERE categoria_id = $categorias_id");
		$sql->execute();
		$infoPosts = $sql->fetchAll();
		foreach ($infoPosts as $key => $value) {
			echo 'Título: ' .$value['titulo'];
			echo '<br/>';
			echo 'Notícia: ' .$value['conteudo'];
			echo '<hr>';
		}
	}
	*/

	$sql = $pdo->prepare("SELECT `posts`.*,`categorias`.*,`posts`.`id` AS `post_id` FROM `posts` INNER JOIN `categorias` ON `posts`.`categoria_id` = `categorias`.`id`");

	$sql->execute();

	$info = $sql->fetchAll(PDO::FETCH_ASSOC);

	echo '<pre>';
	print_r($info);
	echo '</pre';

 ?>