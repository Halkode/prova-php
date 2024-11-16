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
        $this->userModel->create($data);
        header('Location: /users');
    }

    public function index()
    {
        $users = $this->userModel->getAll();
        require_once __DIR__ . '/../views/users/index.php'; 
    }

    public function edit($id)
    {
        $user = $this->userModel->getById($id);
        require '../views/users/edit.php';
    }

    public function update($id, $data)
    {
        $this->userModel->update($id, $data);
        header('Location: /users');
    }

    public function delete($id)
    {
        $this->userModel->delete($id);
        header('Location: /users');
    }
}
