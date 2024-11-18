<?php
session_start();
require_once __DIR__ . '/../models/Users.php'; 
class UserController
{
    private $userModel;
    public function __construct($pdo)
    {
        $this->userModel = new User($pdo);
    }

    public function create($data)
    {
        try {
            $this->validateUserData($data);

            $this->userModel->create($data);
            header('Location: /users');

        } catch (Exception $e) {
            $_SESSION['error'] = $e->getMessage();
            header('Location: /users');
            exit;
        }
    }

    public function index()
    {
        $users = $this->userModel->getAll();
        require __DIR__ . '/../views/users/index.php'; 
    }

    public function edit($id)
    {
        $user = $this->userModel->getById($id);
        require  __DIR__ . '/../views/users/edit.php';
    }

    public function update($id, $data)
    {
        try {
            $this->validateUserData($data, $id);
            $this->userModel->update($id, $data);
            header('Location: /users');
        } catch (Exception $e) {
            $_SESSION['error'] = $e->getMessage();
            header('Location: /users');
            exit;
        }
    }

    public function delete($id)
    {
        try {
            $this->userModel->delete($id);
            header('Location: /users');
        } catch (Exception $e) {
            $_SESSION['error'] = $e->getMessage();
            header('Location: /users');
            exit;
        }

    }

    public function show($id)
    {
        $user = $this->userModel->getById($id);
        require  __DIR__ . '/../views/users/show.php';
    }

    public function validateUserData($data, $id = null)
    {
        if (empty($data['name'])) {
            throw new Exception('O campo "Nome" é obrigatório.');
        }

        if (empty($data['email'])) {
            throw new Exception('O campo "Email" é obrigatório.');
        }

        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            throw new Exception('O campo "Email" deve ser um endereço de email válido.');
        }

        // se o email for valido, verifica se ele ja existe no banco de dados
        if ($this->userModel->checkEmail($data['email']) && is_null($id)) {
            throw new Exception('Já existe um usuário com esse email.');
        }

        if (empty($data['password']) && is_null($id)) {
            throw new Exception('O campo "Senha" é obrigatório.');
        }

        if (strlen($data['password']) < 8 && is_null($id)) {
            throw new Exception('O campo "Senha" deve ter no mínimo 8 caracteres.');
        }

        if (empty($data['birth_date'])) {
            throw new Exception('O campo "Data de Nascimento" é obrigatório.');
        }

        if (empty($data['phone'])) {
            throw new Exception('O campo "Telefone" é obrigatório.');
        }

        if (empty($data['cpf'])) {
            throw new Exception('O campo "CPF" é obrigatório.');
        }

        if (!preg_match('/^\d{3}\.\d{3}\.\d{3}-\d{2}$/', $data['cpf'])) {
            throw new Exception('O campo "CPF" deve ter o formato XXX.XXX.XXX-XX.');
        }

        // se o cpf for valido, verifica se ele ja existe no banco de dados
        if ($this->userModel->checkCpf($data['cpf']) && is_null($id)) {
            throw new Exception('Já existe um usuário com esse CPF.');
        }

        return true;
    }
}
