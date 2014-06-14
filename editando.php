<?php
require_once 'configuracao.php';
require_once 'cabecalho.php';
require_once 'session-start.php';
$id = $_GET['id'];
$conteudo = $_GET['conteudo'];
?>
<!doctype html>

<form method="post" action="editar_noticia.php?id=<?php echo $id; ?>">
    <div class="row">
        <div class="large-12 columns">
            <label><h3>Editar noticia</h3> 
                <textarea name="conteudo" required=""><?php echo $conteudo; ?></textarea> </label>
        </div>
    </div>
    <div class="row">
        <div class="medium-4 columns">
            <input class="button success" type="submit" value="Publicar" />
        </div>
    </div>
</form>


