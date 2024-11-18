<?php

require __DIR__ . '/../app/controllers/UserController.php';
require __DIR__ . '/../config/database.php';

$pdo = ConexaoBanco::getInstance();
$controller = new UserController($pdo);

$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? null;

switch ($action) {
    case 'create':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->create($_POST);
        }
        require '../app/views/users/create.php';
        break;
    case 'edit':
        $controller->edit($id);
        break;
    case 'update':
        $controller->update($id, $_POST);
        break;
    case 'delete':
        $controller->delete($id);
        break;
    case 'show':
        $controller->show($id);
        break;
    default:
        $controller->index();
}
