<?php 
date_default_timezone_set('America/Sao_Paulo');
//conectando ao banco de dados
$pdo = new PDO('mysql:host=localhost;dbname=modulo_7','root','');

//inserindo dados na tabela do banco de dados
/*
$sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null,'Sherlaynne','Lima','2023-07-12 20:02:00')");
  
$sql->execute();
*/

//inserindo dados na tabela do banco de dados através de formulário
//Colocando um 'if' para saber se existe um POST

if (isset($_POST['acao'])) {
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$momento_registro = date('Y-m-d H:i:s');
//QUANTIDADE DE PONTO DE INTERROGAÇÃO DEVE SER IGUAL A QUANTIDADE DE CAMPOS INSERIDOS
$sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null,?,?,?)");
  
$sql->execute(array($nome,$sobrenome,$momento_registro));
	echo 'Cliente inserido com sucesso!';
}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Cadastro no banco</title>
 </head>
 <body>
 	<form method="post">
 		<input type="text" name="nome" required />
 		<input type="text" name="sobrenome" required />
 		<input type="submit" name="acao" value="Enviar!" />
 	</form>
 
 </body>
 </html>