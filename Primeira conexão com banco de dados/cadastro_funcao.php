<?php
include_once 'config.php';

if(isset($_POST['acao'])){
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];

    $sql= $pdo->prepare("INSERT INTO `funcoes` VALUES (NULL,?,?)");
    $sql->execute(array($nome,$descricao));
        echo "<script>
            alert('Função cadastrada!');
        window.location.href = 'cadastro_funcao.php';
        </script>";
}
?>

<html>
    <head>
        <link rel="stylesheet"  href="style.css">
    </head>
    <body>

    <a href="index.php" id="btn" class="btn_voltar">Voltar</a>

        <form method="post" class="painel_form">
            <p class="desc_input">Nome da Função:</p>
            <input type="text" name="nome">
            <p class="desc_input">Descrição:</p>
            <input type="text" name="descricao">
            <br>
            <br>
            <input class="btn_salvar" type="submit" name="acao" value="Registrar">
        </form>
    </body>
</html>