<?php
session_start();
require_once 'configuracao.php';

$autor = $_SESSION['email'];

try {
$sqlName = "SELECT nome_usuario from usuarios where email_usuario =:email";
$statement = $conexao -> prepare($sqlName);
$statement->bindValue(':email', $autor);
$statement -> execute();
$nome = $statement -> fetch();
} catch (PDOException $ex) {
    echo $ex -> getMessage();
    die();
}
/* codigo que pega a data-time atual*/

date_default_timezone_set('America/Sao_Paulo');
$date = date('Y-m-d');

try {
    $sql = "INSERT INTO ata(autor,conteudo,data) VALUES (:autor,:conteudo,:data)";
    $stmt = $conexao -> prepare($sql);
    $stmt -> bindParam(':autor', $nome['nome_usuario']);
    $stmt -> bindParam(':conteudo', $_REQUEST['conteudo']);
    $stmt -> bindParam(':data', $date);
    $stmt -> execute();

    $redirecionar = "atas.php";
    header("Location: $redirecionar");
} catch (PDOException $ex) {
    echo $ex -> getMessage();
    die();
}
?>