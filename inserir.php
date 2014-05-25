<?php
require_once 'configuracao.php';
$nome = $_POST['nome'];
$email = $_POST['emailCadastro'];
$senha = $_POST['password'];

mysql_query("INSERT INTO usuarios(nome_usuario,email_usuario,senha) VALUES ('$nome','$email','$senha')");

$redirecionar = "login.php";
header("Location: $redirecionar");
?>
