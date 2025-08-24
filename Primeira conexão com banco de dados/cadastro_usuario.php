<?php
include_once 'config.php';


if(isset($_POST['acao'])){
	$nome = $_POST['nome'];
	$senha = $_POST['senha'];
	$email = $_POST['email'];



	$sql= $pdo->prepare("INSERT INTO `usuarios` VALUES (null,?,?,?)");
	$sql->execute(array($nome,$senha,$email));
		echo "<script>
            alert('Usuário cadastrado com sucesso!');
            window.location.href = 'cadastro_usuario.php'; // evitar que ao cadastrar um novo usuário e ao aperta F5 não envie a informação novamente para o banco duplicando
          </script>";
}

?>



<br></br>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Cadastro de usuário</title>
	<link rel="stylesheet" href="style.css">
 </head>
 <body>
	<a href="index.php" id="btn" class="btn_voltar">Voltar</a>
	
 	<form method="post" class="painel_form">
	</br>
		<a class="titulo_form" >Cadastro de Usuário</a>
	</br>
</br>
		<p class="desc_input">Nome:</p>
 		<input type="text" name="nome" required />
		<p class="desc_input">Senha:</p>
 		<input type="password" name="senha" required />
		<p class="desc_input">Email:</p>
		<input type="text" name="email" required />
		<br>
		<br>
 		<input class="btn_salvar" type="submit" name="acao" value="Registrar" />
 	</form>
  
 </body>
 </html>