<?php
include_once 'crud.php';
class Controller{
    private $crud;

    public function __construct($pdo){
        $this->crud = new Crud($pdo);
    }

    // Função para retornar todos os usuários
    public function getAllUsers(){
        $sql = "SELECT * FROM usuarios";
        return $this->crud->getSQLGeneric($sql);
    }

    // Função para retornar um usuário pelo ID
    public function getUserById($id){
        $sql = "SELECT * FROM usuarios WHERE id = ?";
        $params = [$id];
        return $this->crud->getSQLGeneric($sql, [$id], false);
    }

    // Função para adicionar um novo usuário
    public function addUser($nome, $email, $senha){
        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)";
        return $this->crud->executeSQLGeneric($sql, [$nome, $email, $senha]);
    }

    // Função para atualizar um usuário existente
    public function updateUser($id, $nome, $email, $senha){
    $sql = "UPDATE usuarios SET nome = ?, email = ?, senha = ? WHERE id = ?";
    return $this->crud->executeSQLGeneric($sql, [$nome, $email, $senha, $id]);
    }


    // Função para deletar um usuário
    public function deleteUser($id){
        $sql = "DELETE FROM usuarios WHERE id = ?";
        return $this->crud->executeSQLGeneric($sql, [$id]);
    }

    //Função para cadastrar uma nova função
    public function addFuncao($nome, $descricao){
        $sql = "INSERT INTO funcoes (nome, descricao) VALUES (?, ?)";
        return $this->crud->executeSQLGeneric($sql, [$nome, $descricao]);
    }

    //Função para retornar todas as funções
    public function getAllFuncoes(){
        $sql = "SELECT * FROM funcoes";
        return $this->crud->getSQLGeneric($sql);
    }
}