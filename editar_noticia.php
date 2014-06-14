<?php
session_start();
require_once 'configuracao.php';


error_reporting(E_ALL);
ini_set("display_errors", 1);
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    

    /* codigo que pega a data-time atual */
    date_default_timezone_set('America/Sao_Paulo');
    $data = date('Y-m-d H:i:s');

    try {
        $sqlName = "update noticia set conteudo =:conteudo,data =:data where id =:id";
        $statement = $conexao->prepare($sqlName);
        $statement->bindParam(':id', $id);
        $statement->bindParam(':data', $data);
        $statement->bindParam(':conteudo', $_POST['conteudo']);
        $statement->execute();
        $nome = $statement->fetch();
        


        $redirecionar = "noticias.php";
        header("Location: $redirecionar");
    } catch (PDOException $ex) {
        echo $ex->getMessage();
        die();
    }
} else {
    echo "<h3>variavel nao setada</h3>";
}
?>
