<?php
require_once "lib/nusoap.php";

$server = new soap_server;

function showUser($nome, $email) {
    return ('<h3 align="center"> Dados User </h3>
     <fieldset style="width: 32%;float:right;margin-right:460px;"> <p align="center"> <strong>Nome</strong>: ' . $nome . '<br><strong>Email</strong>: ' . $email . '</p> </fieldset>');
}

$server -> register('showUser');

$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server -> service($HTTP_RAW_POST_DATA);
?>

