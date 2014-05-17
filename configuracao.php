<?php
$host = "quixada1.cloudapp.net";
$user = "root";
$pass = "35614470";
$banco = "gerenciador_de_atividades";
$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());
?>
