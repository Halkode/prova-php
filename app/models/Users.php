<?php
class User {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function create($data) {
        $stmt = $this->pdo->prepare("INSERT INTO users (name, cpf, email, birth_date, phone, password) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([
            $data['name'], 
            $data['cpf'], 
            $data['email'], 
            $data['birth_date'], 
            $data['phone'], 
            password_hash($data['password'], PASSWORD_BCRYPT)
        ]);
    }

    public function getAll() {
        return $this->pdo->query("SELECT idUser, name, cpf, email, birth_date, phone FROM users")->fetchAll();
    }

    public function getById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function update($id, $data) {
        $stmt = $this->pdo->prepare("UPDATE users SET name = ?, email = ?, birth_date = ?, phone = ?, password = ? WHERE id = ?");
        $stmt->execute([
            $data['name'], 
            $data['email'], 
            $data['birth_date'], 
            $data['phone'], 
            password_hash($data['password'], PASSWORD_BCRYPT),
            $id
        ]);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM users WHERE idUser = ?");
        $stmt->execute([$id]);
    }
}
