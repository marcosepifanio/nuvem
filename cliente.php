<?php
require_once "lib/nusoap.php";
require_once 'configuracao.php';
$client = new nusoap_client('http://ufczuada.azurewebsites.net/servidorSOAP.php');
session_start();
$autor = $_SESSION['email'];

try {
    $sqlName = 'SELECT nome from usuario where email=:email';
    $statement = $conexao -> prepare($sqlName);
    $statement -> bindValue(':email', $autor);
    $statement -> execute();
    $nome = $statement -> fetch();
} catch (PDOException $ex) {
    echo $ex -> getMessage();
    die();
}

$email = $_SESSION['email'];

$parametros = array('nome' => $nome['nome'], 'email' => $email);

$result = $client -> call('showUser', $parametros);
print_r($result);
?>