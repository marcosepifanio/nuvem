<?php
require_once 'configuracao.php';

$email = $_POST['email'];
$senha = sha1($_POST['password']);

try {
    $sqlName = "update usuario set senha =:senha where email =:email";
    $statement = $conexao -> prepare($sqlName);
    $statement -> bindParam(':senha', $senha);
    $statement -> bindParam(':email', $email);
    $statement -> execute();
    $redirecionar = "login.php";
    header("Location: $redirecionar");
} catch (PDOException $ex) {
    echo $ex -> getMessage();
    die();
}
?>
