<?php
include_once 'config.php';
include_once 'Class/Controller.php';

$controller = new Controller($pdo);

$funcao = $controller->getAllFuncoes();
//$sql= $pdo->prepare("SELECT * FROM funcoes");

?>

<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Lista de Função</title>
    </head>
    <body>
        <a href="cadastro_funcao.php" id="btn" class="btn_voltar">Voltar</a>
        <h2 id="txt_cabecalho">Funções Cadastrada</h2>

        <table id="tabela_Visao">
            <tr>
                <th>ID</th>
                <th>Nome da Função</th>
                <th>Descrição da Atividade</th>
            </tr>
            <?php foreach($funcao as $funcoes): ?>
            <tr>
                <td><?= $funcoes['id'] ?></td>
                <td><?= $funcoes['nome'] ?></td>
                <td><?= $funcoes['descricao'] ?></td>
            </tr>
        <?php endforeach; ?>
        </table>
    </body>

</html>