DROP DATABASE IF EXISTS `db_projetoReceitas`;

CREATE DATABASE IF NOT EXISTS `db_projetoReceitas`
DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_general_ci;

USE `db_projetoReceitas`;

CREATE TABLE IF NOT EXISTS `tb_usuario`(
    usuario_id INT PRIMARY KEY AUTO_INCREMENT,
    usuario_nome VARCHAR(100) NOT NULL,
    usuario_email VARCHAR(255) NOT NULL UNIQUE,
    usuario_username VARCHAR(30) NOT NULL UNIQUE,
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
    receita_video__nome VARCHAR(200) NOT NULL,
    fk_usuario INT NOT NULL,
    FOREIGN KEY (fk_usuario) REFERENCES tb_usuario (usuario_id)
);

CREATE TABLE IF NOT EXISTS `tb_imagensReceita`(
    imagem_id INT PRIMARY KEY AUTO_INCREMENT,
    imagem_nome VARCHAR(200) NOT NULL,

    fk_receita INT NOT NULL,
    FOREIGN KEY (fk_receita) REFERENCES tb_receita (receita_id)   
);

DROP USER 'RecipelyUserDatabase'@'localhost';
CREATE USER 'RecipelyUserDatabase'@'localhost' IDENTIFIED WITH mysql_native_password BY 'gghorecipely';
GRANT ALL PRIVILEGES ON `db_projetoreceitas`.* TO 'RecipelyUserDatabase'@'localhost' WITH GRANT OPTION;
