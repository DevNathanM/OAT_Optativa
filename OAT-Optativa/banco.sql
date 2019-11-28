create database formulario;

use formulario;

create table alunos(
	id  int(11) auto_increment primary key,
	nome varchar(30) not null,
    email varchar(50) not null
);
    