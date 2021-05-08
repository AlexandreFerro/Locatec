CREATE DATABASE LOCATEC_APL;

USE LOCATEC_APL;

create table USUARIOS(
userId int PRIMARY KEY AUTO_INCREMENT,
userCreateDate date not null,
userFirstName varchar(60) not null,
userLastName varchar(60) not null,
userCPF varchar(12) not null,
userEmail varchar(100) not all,
userLogin varchar(8) not null,
userPass varchar(45) not null,

-- FOREIGN KEY (EMPLOYEE_COMPANY) REFERENCES COMPANY_TABLE(COMPANY_ID)
);

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
