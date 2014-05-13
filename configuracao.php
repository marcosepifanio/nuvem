<?php
$host = "quixada1.cloudapp.net";
$user = "root";
$pass = "J1#marcos2";
$banco = "gerenciador_de_atividades";
$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());
?>
