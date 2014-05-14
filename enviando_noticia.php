<!--PROVISORIO -->
<?php
include ("configuracao.php");
$conteudo = $_POST['conteudo'];

$autor = "admin";
//obs alterar o autor para o valor da sessão

/* codigo que pega a data-time atual*/
date_default_timezone_set('America/Sao_Paulo');
$mysqldate = date("Y-m-d H:i:s");

mysql_query("INSERT INTO noticias(conteudo,autor,data) VALUES ('$conteudo','$autor','$mysqldate')");

$redirecionar = "index.php";
header("Location: $redirecionar");
?>