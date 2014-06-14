<?php
require_once 'cabecalho.php';
require_once 'session-start.php';
require_once 'configuracao.php';

$sql = "SELECT * FROM noticia WHERE conteudo like %:conteudo% ORDER BY data";
$stmt = $conexao->prepare($sql);
$stmt->bindValue(':conteudo', $_POST['conteudo']);
$stmt->execute();
while ($linha = $stmt->fetch()) {
    $autor = $linha['autor'];
    $conteudo = $linha['conteudo'];
    echo '<p class="panel"><blockquote> ' . $conteudo . '<cite>' . $autor . '</cite><br></blockquote></p>';
}
