<?php
include_once 'config.php';

    if(isset($_POST['acao'])){
        $nome = $_POST['nome'];
        $funcao = $_POST['funcao'];
        $data_nascimento = $_POST['data_nascimento'];
        $cpf = $_POST['cpf'];
        $rg = $_POST['rg'];
        $data_emissao_rg = $_POST['data_emissao_rg'];
        $estado_civil = $_POST['estado_civil'];
        $email = $_POST['email'];
        $telefone1 = $_POST['telefone1'];
        $telefone2 = $_POST['telefone2'];
        $endereco = $_POST['endereco'];
        $numero = $_POST['numero'];
        $cep = $_POST['cep'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $salario = $_POST['salario'];
        $horario = $_POST['horario'];
        $departamento = $_POST['departamento'];
    
    $sql=$pdo->prepare("INSERT INTO `funcionario` VALUES (NULL,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $sql->execute(array($nome,$funcao,$data_nascimento,$cpf,$rg,$data_emissao_rg,$estado_civil,$email,$telefone1,$telefone2,
$endereco,$numero,$cep,$cidade,$estado,$salario,$horario,$departamento));

        echo "<script>
            alert('Funcionário Cadastro com Sucesso!');
            window.location.href = 'cadastro_funcionario.php';
        </script>";
    
    }
?>

<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Cadastro de Funcionário</title>
    </head>
    <body>
        <a href="index.php" id="btn" class="btn_voltar">Voltar</a>
        <a href="listar_funcionario.php" id="btn" class="btn_acessar">Acessar Funcionário</a>
        <form method="post" class="painel_form">
        <p class="desc_input">Nome:</p>
        <input type="text" name="nome" required>
        <p class="desc_input">Função:</p>
        <input type="text" name="funcao" required>
        <p class="desc_input">Data de Nascimento:</p>
        <input type="date" name="data_nascimento" required>
        <p class="desc_input">Cpf:</p>
        <input type="text" name="cpf" required>
        <p class="desc_input">RG:</p>
        <input type="text" name="rg" required>
        <p class="desc_input">Data de Emissão do RG:</p>
        <input type="date" name="data_emissao_rg" required>
        <p class="desc_input">Estado Civil:</p>
        <input type="text" name="estado_civil" required>
        <p class="desc_input">E-mail:</p>
        <input type="text" name="email" required>
        <p class="desc_input">Telefone 1:</p>
        <input type="text" name="telefone1" required>
        <p class="desc_input">Telefone 2:</p>
        <input type="text" name="telefone2" required>
        <p class="desc_input">Endereço:</p>
        <input type="text" name="endereco" required>
        <p class="desc_input">Número:</p>
        <input type="text" name="numero" required>
        <p class="desc_input">Cep:</p>
        <input type="text" name="cep" required>
        <p class="desc_input">Cidade:</p>
        <input type="text" name="cidade" required>
        <p class="desc_input">Estado:</p>
        <input type="text" name="estado" required>
        <p class="desc_input">Salário:</p>
        <input type="text" name="salario" required>
        <p class="desc_input">Horário:</p>
        <input type="text" name="horario" required>
        <p class="desc_input">Departamento:</p>
        <input type="text" name="departamento" required>
        <br>
        <br>
        <input id="btn" class="btn_salvar" type="submit" name="acao" value="Registrar">
        </form>
    </body>
</html>