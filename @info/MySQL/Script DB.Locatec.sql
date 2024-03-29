#CREATE DATABASE LOCATEC;

USE LOCATEC;
#================================ TIPO DE CADASTRO + INSERTS OBRIGATORIOS
create table USER_TYPE(
	utId int PRIMARY KEY not null,
	utDescricao varchar(14)
		#1 - administrador
		#2 - empregado
		#3 - cliente
);
insert into user_type values(1,'Administrador');
insert into user_type values(2,'Funcionario');
insert into user_type values(3,'Cliente');

#================================ TABELA PARA REGISTRO DE CADASTROS (USUARIOS)
create table USUARIOS(
userId int PRIMARY KEY AUTO_INCREMENT,
userCreateDate date not null,
userFirstName varchar(60) not null,
userLastName varchar(60) not null,
userCPF varchar(12) not null,
userEmail varchar(100) not null,
userLogin varchar(8) not null,
userPass varchar(45) not null,
userTipo int(1) not null,
	FOREIGN KEY (userTipo) REFERENCES USER_TYPE(utId)
);

#================================ TABELA PARA REGISTRO DE CADASTROS (VEICULOS)
create table VEICULOS(
vcId int PRIMARY KEY AUTO_INCREMENT,
vcCreateDate varchar(20) not null,
vcName varchar(20) not null,
vcStatus boolean not null,
vcDisponib boolean not null,
vcMarca varchar(20) not null,
vcModelo varchar(10) not null,
vcTipo varchar(20) not null,
vcAno int not null,
vcCor varchar(8) not null,
vcCombust varchar(8) not null,
vcDocNum varchar(20) not null,
vcDocVenc date not null,
vcPlaca varchar(8) not null,
vcValor float not null
);
