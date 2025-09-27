<?php
include_once 'config.php';

$sql=$pdo->prepare("SELECT * FROM funcionario");
$sql->execute();
$funcionarios = $sql->fetchAll(PDO::FETCH_ASSOC);
?>

<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Funcionários Cadastrado</title>
    </head>
    <body>
        <a href="cadastro_funcionario.php" id="btn" class="btn_voltar">Voltar</a>
        <h2 id="txt_cabecalho">Funcionário Cadastrado</h2>
        <table id="tabela_visao">
            <tr>
                <th>id</th>
                <th>Nome do Funcionário</th>
                <th>Código Função</th>
                <th>Data de Nascimento</th>
                <th>cpf</th>
                <th>rg</th>
                <th>Data Emissão rg</th>
                <th>Estado Civil</th>
                <th>Email</th>
                <th>Telefone 1</th>
                <th>Telefone 2</th>
                <th>Endereço</th>
                <th>Número</th>
                <th>Cep</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>Salário</th>
                <th>Horário</th>
                <th>Departamento</th>
            </tr>
            <?php foreach($funcionarios as $funcionario): ?>
            <tr>
                <td><?=$funcionario['id']?></td>
                <td><?=$funcionario['nome']?></td>
                <td><?=$funcionario['funcao']?></td>
                <td><?=$funcionario['data_nascimento']?></td>
                <td><?=$funcionario['cpf']?></td>
                <td><?=$funcionario['rg']?></td>
                <td><?=$funcionario['data_emissao_rg']?></td>
                <td><?=$funcionario['estado_civil']?></td>
                <td><?=$funcionario['email']?></td>
                <td><?=$funcionario['telefone1']?></td>
                <td><?=$funcionario['telefone2']?></td>
                <td><?=$funcionario['endereco']?></td>
                <td><?=$funcionario['numero']?></td>
                <td><?=$funcionario['cep']?></td>
                <td><?=$funcionario['cidade']?></td>
                <td><?=$funcionario['estado']?></td>
                <td><?=$funcionario['salario']?></td>
                <td><?=$funcionario['horario']?></td>
                <td><?=$funcionario['departamento']?></td>
            </tr>
        <?php endforeach; ?>
        </table>
    </body>
</html>