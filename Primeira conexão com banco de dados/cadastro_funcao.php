<?php
include_once 'config.php';
include_once 'Class/Controller.php';

$controller = new Controller($pdo);

if(isset($_POST['acao'])){
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    //chamar o controller para inserir a função
    $res = $controller->addFuncao($nome, $descricao);

    if(isset($res->sucesso) && $res->sucesso == 0){
        echo "<script>alert('Erro: {$res->erro}');</script>";       
    }else {
        echo "<script>
            alert('Função cadastrada!');
        window.location.href = 'cadastro_funcao.php';
        </script>";
        exit;
    }
}
?>

<html>
    <head>
        <link rel="stylesheet"  href="style.css">
        <title>Cadastro de Função</title>
    </head>
    <body>

    <a href="index.php" id="btn" class="btn_voltar">Voltar</a>
    <a href="listar_funcao.php"  id="btn" class="btn_acessar">Visualizar Funções</a>

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