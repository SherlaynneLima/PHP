<?php
include_once 'config.php';
include_once 'Class/Controller.php';

$controller = new Controller($pdo);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $usuario = $controller->getUserById($id);
}

// Atualizar usuário
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    $res = $controller->updateUser($id, $nome, $email, $senha);

    if(isset($res->sucesso) && $res->sucesso == 0){
            echo "<script>alert('Erro: {$res->erro}');</script>";
    }else{
        echo "<script>
            alert('Usuário atualizado com sucesso!');
            window.location.href = 'listar_usuarios.php';
            </script>";
          exit;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Editar Usuário</title>
</head>
<body>
    <h2 id="txt_cabecalho">Editar Usuário</h2>
    <form method="POST" class="painel_form">
        <input type="hidden" name="id" value="<?= $usuario['id'] ?>">
        <label class="desc_input">Nome:</label>
        <input type="text" name="nome" value="<?= $usuario['nome'] ?>"><br>
        <label class="desc_input">Email:</label>
        <input type="email" name="email" value="<?= $usuario['email'] ?>"><br>
        <label class="desc_input">Senha:</label>
        <input type="password" name="senha" value="<?= $usuario['senha'] ?>"><br>
        <button type="submit" id="btn" class="btn_acessar">Salvar</button>
        <a href="listar_usuarios.php" class="btn_voltar">Voltar</a>
    </form>
</body>
</html>
