<?php
session_start();
require_once 'configuracao.php';

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
/* codigo que pega a data-time atual*/

date_default_timezone_set('America/Sao_Paulo');
$date = date('Y-m-d');

try {
    $sql = 'INSERT INTO ata(conteudo,data,autor) VALUES (:conteudo,:data,:autor)';
    $stmt = $conexao -> prepare($sql);
    $stmt -> bindParam(':conteudo', $_REQUEST['conteudo']);
    $stmt -> bindParam(':data', $date);
    $stmt -> bindParam(':autor', $nome['nome']);
    $stmt -> execute();

    $redirecionar = "atas.php";
    header("Location: $redirecionar");
} catch (PDOException $ex) {
    echo $ex -> getMessage();
    die();
}
?>