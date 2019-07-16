create database banco01;

use banco01;

create table Endereco
(
id serial PRIMARY KEY,
cep int NOT NULL,
logradouro varchar(100) NOT NULL,
numero int NOT NULL,
complemento varchar(40),
bairro varchar(30) NOT NULL,
cidade varchar(30) NOT NULL,
uf varchar(8) NOT NULL
);

create table PessoaFisica
(
id serial PRIMARY KEY,
cpf int NOT NULL,
data_nasc int NOT NULL,
nome varchar(30) NOT NULL,
sobrenome varchar(15) NOT NULL
);

create table PessoaJuridica
(
id serial PRIMARY KEY,
cnpj int NOT NULL,
razao_social varchar (150) NOT NULL,
nome_fantasia varchar (150) NOT NULL
);

