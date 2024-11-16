-- Cria o banco de dados se ele ainda não existir
CREATE DATABASE IF NOT EXISTS dump_users CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- Usando dump_users
USE dump_users;

-- Criando tabela `users`
CREATE TABLE `users` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `cpf` varchar(14) NOT NULL UNIQUE,
  `email` varchar(100) NOT NULL UNIQUE,
  `birth_date` date NOT NULL,
  `phone` varchar(16) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
