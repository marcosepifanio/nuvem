<?php
require_once 'configuracao.php';
try {
if (isset($_REQUEST['nome'])) {
     $sql = 'INSERT INTO usuarios(nome_usuario,email_usuario,senha)
            VALUES (:nome,:email,:senha)';
    $stmt = $conexao -> prepare($sql);
    $stmt -> bindParam(':nome', $_REQUEST['nome']);
    $stmt -> bindParam(':email', $_REQUEST['emailCadastro']);
    $stmt -> bindParam(':senha', $_REQUEST['password']);
    $stmt -> execute();
    header('location: login.php');
}
} catch (PDOException $ex) {
echo $ex -> getMessage();
die();
}
?>