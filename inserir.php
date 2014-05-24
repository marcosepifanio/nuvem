<?php
require_once 'configuracao.php';
try {
    if (isset($_REQUEST['login'])) {
        $sql = 'INSERT INTO usuarios (nome_usuario,email_usuario, senha)
                VALUES (:nome,:email,:senha)';
        $stmt = $conexao -> prepare($sql);
        $stmt -> bindParam(':login', $_REQUEST['nome']);
        $stmt -> bindParam(':email', $_REQUEST['email']);
        $stmt -> bindParam(':senha', $_REQUEST['senha']);
        $stmt -> execute();
        header('location: login.php');
    }
} catch (PDOException $ex) {
    echo $ex -> getMessage();
    die();
}
?>