
-- Criar o banco de dados
DROP DATABASE IF EXISTS db_inscricao_maticula;
CREATE DATABASE db_inscricao_maticula;
USE db_inscricao_maticula;

-- Criar tabela perfil pra os usuarios
DROP TABLE IF EXISTS tb_perfil;
CREATE TABLE tb_perfil (
    id_perfil INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user_perfil VARCHAR (50) UNIQUE NOT NULL
);

-- Dados pré-definidos na tabela perfil
INSERT INTO tb_perfil(user_perfil) VALUES('Adiministrador');
INSERT INTO tb_perfil(user_perfil) VALUES('Funcionario');

-- Criar Tabela usuarios
DROP TABLE IF EXISTS tb_usuario;
CREATE TABLE tb_usuario(
    id_usuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_perfil INT NOT NULL, 
    username VARCHAR(150) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    senha VARCHAR(150),
    img_user VARCHAR(100),
    criado_em DATETIME DEFAULT CURRENT_TIMESTAMP,
    atualizado_em DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY(id_perfil) REFERENCES tb_perfil(id_perfil) 
);

--Dados pré-definidos na tabela usuario
INSERT INTO tb_usuario(id_perfil, username, email, senha, criado_em)
VALUES(1, 'Admin', 'admin@gmail.com', 'admin@2026', CURRENT_TIMESTAMP),
VALUES(2, 'User1', 'user1@gmail.com', 'user1@2026', CURRENT_TIMESTAMP);