<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $conteudo = $_GET['conteudo'];

    try {
        $sqlName = "update noticia set conteudo =:conteudo where id =:id";
        $statement = $conexao -> prepare($sqlName);
        $statement -> bindValue(':id', $id);
        $statement -> bindValue(':conteudo', $conteudo);
        $statement -> execute();
        $nome = $statement -> fetch();
    } catch (PDOException $ex) {
        echo $ex -> getMessage();
        die();
    }

} else {
    echo "<h3>variavel nao setada</h3>";
}
?>
