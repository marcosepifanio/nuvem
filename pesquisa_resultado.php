<?php
require_once 'cabecalho.php';
require_once 'session-start.php';
session_start();
require_once 'configuracao.php';

$sql = "SELECT conteudo,data FROM noticia WHERE conteudo like %:conteudo%";
$stmt = $conexao->prepare($sql);
$stmt->bindValue(':conteudo', $_POST['conteudo']);
$stmt->execute();
while ($linha = $stmt->fetch()) {
    $autor = $linha['autor'];
    $conteudo = $linha['conteudo'];
    $id = $linha['id'];
    $link_apagar = "apagar_noticia.php?id=" . $id;
    $link_editar = "editando.php?id=" . $id . "&conteudo=" . $conteudo;
    echo '<p class="panel"><blockquote> ' . $conteudo . '<cite>' . $autor . '</cite><br><a href="' . $link_editar . '" class="small button" >Editar</a><a href="' . $link_apagar . '" class="small alert button" onclick="return confirm(Confirma exclusão?)">Apagar</a></blockquote></p>';
}
?>
?>

/* 
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/

