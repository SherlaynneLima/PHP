<?php
include_once 'config.php';
include_once 'Class/Controller.php';

$controller = new Controller($pdo);

// Excluir se receber parâmetro
if (isset($_GET['excluir'])) {
    $id = $_GET['excluir'];
    $res = $controller->deleteUser($id);
    //$sql = $pdo->prepare("DELETE FROM usuarios WHERE id = ?");
    
    if($res->sucesso){
        echo "<script>
            alert('Usuário excluído com sucesso!');
            window.location.href = 'listar_usuarios.php';
          </script>";
          exit;
    }else{
        echo "Erro:" . $res->erro;
    }

    
}

// Buscar todos os usuários
$usuarios = $controller->getAllUsers();
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
            <th></th>
        </tr>

        <?php foreach($usuarios as $usuario): ?>
            <tr>
                <td><?= $usuario['id'] ?></td>
                <td><?= $usuario['nome'] ?></td>
                <td><?= $usuario['email'] ?></td>
                <td>
                <a href="editar_usuario.php?id=<?= $usuario['id'] ?>" class="btn_editar">✏️</a>
                <a href="?excluir=<?= $usuario['id'] ?>" class="btn_excluir" onclick="return confirm('Tem certeza que deseja excluir?')">🗑️</a>
            </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
