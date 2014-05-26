<?php
session_start();
require_once 'configuracao.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$conexao -> query("use $banco") or die ("Erro ao selecionar o database");
$sql = "SELECT * FROM usuarios WHERE email_usuario =:email and senha =:senha";

$result = $conexao -> prepare($sql) or die("Erro ao selecionar o usuário");
$result -> bindParam(':email', $email);
$result -> bindParam(':senha', $senha);
$result->execute();

if ($result->fetch()) {
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    header('location:index.php');
} else {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('location:login.php');

}
?>

