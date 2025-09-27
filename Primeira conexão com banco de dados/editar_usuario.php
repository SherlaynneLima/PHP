<?php
include_once 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Busca usuário pelo ID
    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE id = ?");
    $sql->execute([$id]);
    $usuario = $sql->fetch(PDO::FETCH_ASSOC);
}

// Atualizar usuário
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $id = $_POST['id'];

    $sql = $pdo->prepare("UPDATE usuarios SET nome = ?, email = ? WHERE id = ?");
    $sql->execute([$nome, $email, $id]);

    echo "<script>
            alert('Usuário atualizado com sucesso!');
            window.location.href = 'listar_usuarios.php';
          </script>";
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
        <button type="submit" id="btn" class="btn_acessar">Salvar</button>
    </form>
</body>
</html>
