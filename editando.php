<?php
require_once 'configuracao.php';
require_once 'cabecalho.php';
require_once 'session-start.php';
$id = $_GET['id'];
$conteudo = $_GET['conteudo'];

?>
<!doctype html>

<form method="post" action="editar_noticia.php?id=<?php echo $id;?>">
    <div class="row">
        <div class="large-12 columns">
            <label><h3>Editar noticia</h3> 
                <textarea value="<?php echo $conteudo;?>" name="conteudo" required=""></textarea> </label>
        </div>
    </div>
    <div class="medium-4 columns">
        <input class="button success" type="submit" value="Publicar" />

    </div>
</form>

/* 
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/

