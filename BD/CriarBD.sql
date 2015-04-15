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
    data DateTime not null,
    hora
);

