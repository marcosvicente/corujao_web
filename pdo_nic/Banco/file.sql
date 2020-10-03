create database if not exists corujao; 
use corujao;

CREATE TABLE usuario(
  id INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  senha VARCHAR(45) NOT NULL,
  registro_profissional INT,
  tipo_usuario INT NOT NULL,
  PRIMARY KEY (id));

CREATE TABLE noticia(
  id INT NOT NULL AUTO_INCREMENT,
  titulo VARCHAR(45) NOT NULL,
  texto TEXT NOT NULL,
  criado TIMESTAMP NOT NULL,
  atualizado TIMESTAMP NOT NULL,
  PRIMARY KEY (id));

CREATE TABLE categoria(
  id INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(45) NOT NULL,
  PRIMARY KEY (id));

CREATE TABLE comentario(
  id INT NOT NULL AUTO_INCREMENT,
  texto TEXT NOT NULL,
  criado TIMESTAMP NOT NULL,
  atualizado TIMESTAMP NOT NULL,
  PRIMARY KEY (id));

CREATE TABLE noticia_categoria(
  noticia_id INT NOT NULL,
  categoria_id INT NOT NULL,
  PRIMARY KEY (noticia_id, categoria_id),
    FOREIGN KEY (noticia_id)
		REFERENCES noticia(id),
    FOREIGN KEY (categoria_id)
		REFERENCES categoria(id));
   
CREATE TABLE gerenciamento_noticia(
  noticia_id INT NOT NULL,
  usuario_id INT NOT NULL,
  PRIMARY KEY (noticia_id, usuario_id),
    FOREIGN KEY (noticia_id)
		REFERENCES noticia(id),
    FOREIGN KEY (usuario_id)
		REFERENCES usuario(id));
   
CREATE TABLE leitor_comentario_noticia(
  usuario_id INT NOT NULL,
  comentario_id INT NOT NULL,
  noticia_id INT NOT NULL,
  PRIMARY KEY (usuario_id, comentario_id, noticia_id),
    FOREIGN KEY (usuario_id)
		REFERENCES usuario(id),
    FOREIGN KEY (comentario_id)
		REFERENCES comentario(id),
    FOREIGN KEY (noticia_id)
		REFERENCES noticia(id));