# Crud-cadastro
Crud de cadastro de clientes


Alterar os campos de:
conn.php
$host = "";  linha 2
$dbname = ""; linha 3
$user = "";  linha 4
$pass = "";  linha 5 

de acordo com o seu Banco de dados. 

CREATE TABLE users (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome_cliente VARCHAR(255),
    email_cliente VARCHAR(255),
    telefone_cliente VARCHAR(13),
    senha_cliente VARCHAR (255),
    data_nasc_cliente VARCHAR (10));
