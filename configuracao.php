<?php
$user = "root";
$banco = "gerenciador_de_atividades";
$pass = "35614470";
$dsn = "mysql:host=quixada1.cloudapp.net;dbname=gerenciador_de_atividades";
try {
    $conexao = new PDO($dsn, $user, $pass);
} catch (PDOException $ex) {
    echo $ex -> getMessage();
    die();
}
?>
