<?php
// Configurações do banco
$host = "localhost";   // ou IP do servidor
$user = "root";        // usuário do banco
$pass = "";            // senha do banco
$db   = "banco_empresa"; // nome do banco

try {
    // Criando a conexão (PDO)
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    
    // Definindo modo de erro para exceção
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}
?>


