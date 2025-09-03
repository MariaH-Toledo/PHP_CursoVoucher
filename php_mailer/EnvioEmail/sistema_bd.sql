CREATE DATABASE sistema;
USE sistema;

CREATE TABLE IF NOT EXISTS usuario(
id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(100) NOT NULL,
email VARCHAR(100) NOT NULL,
senha VARCHAR(100) NOT NULL
);

SELECT * FROM usuario;

INSERT INTO usuario (nome, email, senha) VALUES ('Maria Helena', 'toledomiranda.maria23@gmail.com', '123');

