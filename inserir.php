<?php
require_once 'configuracao.php';

$senha = sha1($_REQUEST['password']);
date_default_timezone_set('America/Sao_Paulo');
$date = date('Y-m-d H:i:s');

try {
    if (isset($_REQUEST['nome'])) {
        $sql = 'INSERT INTO usuario (nome, email, data_criacao, senha) VALUES (:nome, :email, :data, :senha)';
        $stmt = $conexao -> prepare($sql);
        $stmt -> bindParam(':nome', $_REQUEST['nome']);
        $stmt -> bindParam(':email', $_REQUEST['emailCadastro']);
        $stmt -> bindParam(':data', $date);
        $stmt -> bindParam(':senha', $senha);
        $stmt -> execute();
        header('location: login.php');
    }
} catch (PDOException $ex) {
    echo $ex -> getMessage();
    die();
}
?>