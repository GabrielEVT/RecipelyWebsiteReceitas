DROP DATABASE IF EXISTS `db_projetoReceitas`

CREATE DATABASE IF NOT EXISTS `db_projetoReceitas`
DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_general_ci;

USE `db_projetoReceitas`;

CREATE TABLE IF NOT EXISTS `tb_usuario`(
    usuario_id INT PRIMARY KEY AUTO_INCREMENT,
    usuario_nome VARCHAR(100) NOT NULL,
    usuario_email VARCHAR(255) NOT NULL,
    usuario_username VARCHAR(30) NOT NULL,
    usuario_senha VARCHAR(32) NOT NULL
);

CREATE TABLE IF NOT EXISTS `tb_receita`(
    receita_id INT PRIMARY KEY AUTO_INCREMENT,
    receita_nome VARCHAR(80) NOT NULL,
    receita_ingredientes VARCHAR(1000) NOT NULL,
    receita_modoPreparo VARCHAR(1000) NOT NULL,
    receita_descricao VARCHAR(300) NOT NULL,
    receita_tempoPreparo TIME NOT NULL,
    receita_servePessoas INT NOT NULL,
    receita_dataPublicacao DATE NOT NULL,
    receita_views INT NOT NULL,
    receita_favoritos INT NOT NULL,
    fk_usuario INT NOT NULL,
    FOREIGN KEY (fk_usuario) REFERENCES tb_usuario (usuario_id)
);

CREATE TABLE IF NOT EXISTS `tb_imagensReceita`(
    imagem_id INT PRIMARY KEY AUTO_INCREMENT,
    imagem_nome VARCHAR(40) NOT NULL,
    imagem_pathLocal VARCHAR NOT NULL,

    fk_receita INT NOT NULL,
    FOREIGN KEY (fk_receita) REFERENCES tb_receita (receita_id)   
);

CREATE TABLE IF NOT EXISTS `tb_videoReceita`(
    video_id INT PRIMARY KEY AUTO_INCREMENT,
    video_nome VARCHAR(40) NOT NULL,
    video_pathLocal VARCHAR NOT NULL,
    
    fk_receita INT NOT NULL,
    FOREIGN KEY (fk_receita) REFERENCES tb_receita (receita_id)   
);