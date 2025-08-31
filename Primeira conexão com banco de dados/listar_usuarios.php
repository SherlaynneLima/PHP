<?php
include_once 'config.php';

// Buscar todos os usuários
$sql = $pdo->prepare("SELECT * FROM usuarios");
$sql->execute();
$usuarios = $sql->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lista de Usuários</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="cadastro_usuario.php" class="btn_voltar">Voltar</a>
    <h2 id="txt_cabecalho">Usuários Cadastrados</h2>

    <table id="tabela_Visao">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
        </tr>

        <?php foreach($usuarios as $usuario): ?>
            <tr>
                <td><?= $usuario['id'] ?></td>
                <td><?= $usuario['nome'] ?></td>
                <td><?= $usuario['email'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
