<?php
include_once 'config.php';

$sql= $pdo->prepare("SELECT * FROM funcoes");
$sql->execute();
$funcoes = $sql->fetchAll(PDO::FETCH_ASSOC);

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
            <?php foreach($funcoes as $funcao): ?>
            <tr>
                <td><?= $funcao['id'] ?></td>
                <td><?= $funcao['nome'] ?></td>
                <td><?= $funcao['descricao'] ?></td>
            </tr>
        <?php endforeach; ?>
        </table>
    </body>

</html>