<?php

session_start();

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'webproject';

global $pdo;
// Conecta-se ao banco de dados MySQL
try{
    $pdo = new PDO('mysql:host=localhost;dbname=webproject','root','',[ 
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC 
    ]);

    // $pdo = new PDO("mysql:dbname=".$banco."; host=".$servidor, $usuario, $senha);
    // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "ERRO: ".$e->getmessage();
    exit;

}
?>