CREATE DATABASE clientes_acesa;

USE clientes_acesa;

CREATE TABLE alunos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    telefone VARCHAR(15),
    mensagem TEXT,
    data_inscricao TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
