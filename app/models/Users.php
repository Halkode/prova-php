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
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE idUser = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function update($id, $data) {

        if (!empty($data['password'])) {
            $stmt = $this->pdo->prepare("UPDATE users SET name = ?, email = ?, birth_date = ?, phone = ?, password = ? WHERE idUser = ?");

            return $stmt->execute([
                $data['name'], 
                $data['email'], 
                $data['birth_date'], 
                $data['phone'], 
                password_hash($data['password'], PASSWORD_BCRYPT),
                $id
            ]);
        }

        $stmt = $this->pdo->prepare("UPDATE users SET name = ?, email = ?, birth_date = ?, phone = ? WHERE idUser = ?");

        return $stmt->execute([
            $data['name'], 
            $data['email'], 
            $data['birth_date'], 
            $data['phone'],
            $id
        ]);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM users WHERE idUser = ?");
        $stmt->execute([$id]);
    }

    public function checkEmail($email) {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        return $stmt->fetch();
    }

    public function checkCpf($cpf) {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE cpf = ?");
        $stmt->execute([$cpf]);
        return $stmt->fetch();
    }
}
