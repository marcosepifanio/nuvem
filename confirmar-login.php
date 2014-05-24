<?php
require_once 'configuracao.php';
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

$select = mysql_select_db("$banco") or die("Sem acesso ao DB, Entre em contato com lucas.compufc@gmail.com");

// A vriavel $result pega as varias $login e $senha, faz uma pesquisa na tabela de usuarios
$result = mysql_query("SELECT * FROM usuarios WHERE email_usuario = '$email' and senha = '$senha'");

if (mysql_num_rows($result) > 0) {
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    header('location:index.php');
} else {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('location:login.php');

}
?>

