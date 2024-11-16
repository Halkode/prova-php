<?php
class ConexaoBanco extends PDO
{
    private static $instance = null;
    private function __construct($databaseName, $user, $password)
    {
        $options = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        parent::__construct($databaseName, $user, $password, $options);
    }

    public static function getInstance()
    {
        try {
            if (!isset(self::$instance)) {
                self::$instance = new ConexaoBanco("mysql:dbname=dump_users;host=localhost", "root", "");
            }
            return self::$instance;
        } catch (PDOException $error) {
            die("Erro ao conectar! " . $error->getMessage());
        }
    }
}
