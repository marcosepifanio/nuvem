<?php
require_once 'configuracao.php';

$autor = "admin";
/* codigo que pega a data-time atual*/
date_default_timezone_set('America/Sao_Paulo');
$date = date('Y-m-d H:i:s');

try {
    $sql = "INSERT INTO noticias(conteudo,autor,data) VALUES (:conteudo,:autor,:data)";
    $stmt = $conexao -> prepare($sql);
    $stmt -> bindParam(':conteudo', $_REQUEST['conteudo']);
    $stmt -> bindParam(':autor', $autor);
    $stmt -> bindParam(':data', $date);
    $stmt -> execute();

    $redirecionar = "noticias.php";
    header("Location: $redirecionar");
} catch (PDOException $ex) {
    echo $ex -> getMessage();
    die();
}
?>