-- Geração de Modelo físico
-- Sql ANSI 2003 - brModelo.
CREATE DATABASE EMPRESA_SOLAR;
USE EMPRESA_SOLAR;
SELECT DATABASE();


CREATE TABLE Clientes (
ID_Cliente int auto_increment PRIMARY KEY,
Nome_Cliente varchar(100)
);

CREATE TABLE Produtos (
ID_Produto int auto_increment PRIMARY KEY,
Nome_Produto varchar(100)
);

CREATE TABLE Compra (
ID_Compra int auto_increment PRIMARY KEY not null,
ID_Produto int,
ID_Cliente int ,
FOREIGN KEY(ID_Produto) REFERENCES Produtos (ID_Produto),
FOREIGN KEY(ID_Cliente) REFERENCES Clientes (ID_Cliente)
);

CREATE TABLE VENDEDORES (
Id_Vendedor int auto_increment PRIMARY KEY,
Nome_Vendedor varchar(100),
Salario decimal(10,2),
fsalarial char(1)
);

DROP TABLE VENDEDORES;

INSERT INTO CLIENTES (Nome_Cliente) VALUES ('Otavio');
INSERT INTO PRODUTOS VALUES (2,'Teclado');
INSERT INTO VENDEDORES (Nome_Vendedor, Salario, fsalarial) VALUES ('Bruno',500000,1);
INSERT INTO VENDEDORES (Nome_Vendedor, Salario, fsalarial) VALUES ('Roberto',5000,2);
INSERT INTO VENDEDORES (Nome_Vendedor, Salario, fsalarial) VALUES ('Henrique',500.00,1);

UPDATE PRODUTOS SET Nome_Produto = 'Mouse'
WHERE ID_Produto = 2;

UPDATE VENDEDORES SET salario = 3150
WHERE fsalarial = 1;

UPDATE VENDEDORES SET salario = (salario * 1.10)
WHERE fsalarial = 2;

UPDATE VENDEDORES SET salario = 3500
where fsalarial = 1;

UPDATE VENDEDORES SET salario = 10000
WHERE nome_vendedor = 'Bruno';

SELECT * FROM vendedores;


TRUNCATE TABLE VENDEDOR;

-- AUTORIZAR UPDATE EM FORMA DE COMANDO 
SET SQL_SAFE_UPDATES = 0;


DELETE FROM PRODUTOS WHERE ID_PRODUTO = 1;
DELETE FROM CLIENTES WHERE NOME_CLIENTE = 'Bruno';
DELETE FROM VENDEDORES WHERE ID_VENDEDOR>=1 AND
ID_VENDEDOR<=10;
DELETE FROM VENDEDORES WHERE ID_VENDEDOR<=10 OR 
ID_VENDEDOR>=20;

DELETE FROM CLIENTES;

TRUNCATE TABLE CLIENTES;