create table ADMIN(
    id Integer primary key,
    login varchar(30),
    senha varchar(20)
);

CREATE TABLE CIDADE (
    id Integer primary key not null,
    nome varchar(50) not null,
    uf char(2) not null
);

CREATE TABLE EMPRESA (
    id Integer primary key not null,
    nome varchar(50) not null,
    email varchar(30),
    telefone varchar(20),
    cep varchar(10) not null,
    bairro varchar(30) not null,
    logradouro varchar(40) not null,
    numero Integer not null,
    foto_perfil longblob,
    foto_capa longblob,
    foto_galeria longblob,
    avaliacao float,
    id_cidade Integer not null,
    FOREIGN KEY(id_cidade) REFERENCES CIDADE(id)
);

CREATE TABLE EVENTO (
    id Integer primary key not null,
    descricao varchar(50) not null,
    data Date not null,
    hora time text,
    foto longblob,
    categoria text,
    id_empresa Integer not null,
    FOREIGN KEY(id_empresa) REFERENCES EMPRESA(id)
);

CREATE TABLE USUARIO (
    id Integer primary key not null,
    nome varchar(30) not null,
    nick varchar(10) not null,
    foto_perfil longblob,
    id_cidade Integer not null,
    FOREIGN KEY(id_cidade) REFERENCES CIDADE(id)
);

CREATE TABLE AMIGO (
    id Integer primary key not null,
    id_usuario Integer not null,
    id_amigo Integer not null,
    FOREIGN KEY(id_usuario) REFERENCES USUARIO(id),
    FOREIGN KEY(id_amigo) REFERENCES USUARIO(id)
);

CREATE TABLE COMENTARIO (
    id Integer primary key not null,
    comentario varchar(50) not null,
    id_evento Integer not null,
    id_usuario Integer not null,
    FOREIGN KEY(id_evento) REFERENCES EVENTO(id),
    FOREIGN KEY(id_usuario) REFERENCES USUARIO(id)
);

CREATE TABLE CONFIRMADOS (
    id Integer primary key not null,
    quantidade Integer not null,
    id_evento Integer not null,
    id_usuario Integer not null,
    FOREIGN KEY(id_evento) REFERENCES EVENTO(id),
    FOREIGN KEY(id_usuario) REFERENCES USUARIO(id)
);

