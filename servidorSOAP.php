<?php
require_once "lib/nusoap.php";
$server = new soap_server;

$server -> register('showUser');

function showUser($nome, $email) {
    return ('<strong>Nome</strong>: '. $nome. '<br><strong>Email</strong>: ' .$email);
}

$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server -> service($HTTP_RAW_POST_DATA);
?>

