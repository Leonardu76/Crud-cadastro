<?php
$host = ""; //HOST DO BANCO
$dbname = ""; //NOME DO BANCO
$user = ""; //USUARIO
$pass = ""; //SENHA 

try{
$db = new PDO("mysql:host=$host;dbname=$dbname;","$user","$pass");
//ATIVAR modo de erro
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    //erro de conexão
    $error = $e->getMeessage();
    echo "Erro:" . $error;
}

