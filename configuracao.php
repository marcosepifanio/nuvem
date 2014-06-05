<?php
$user = "root";
$banco = "zuada";
$pass = "35614470";
$dsn = "mysql:host=quixada1.cloudapp.net;dbname=zuada";
try {
    $conexao = new PDO($dsn, $user, $pass);
} catch (PDOException $ex) {
    echo $ex -> getMessage();
    die();
}
?>
