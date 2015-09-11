<?php
require_once 'configuracao.php';
require_once 'cabecalho.php';
require_once 'session-start.php';
?>
<!doctype html>
<html class="no-js" lang="en">
	<head>
		
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Zuada ...LaLALa</title>

		<link rel="stylesheet" href="css/foundation.css" />
		<link rel="stylesheet" href="css/style.css" />
		<script src="js/vendor/modernizr.js"></script>
	</head>
	<body>
		<div class="row">
			<div class="small-12 large-centered columns">
				<form method="post" action="pesquisa.php">
					<div class="row">
						<div class="small-6 large-centered columns">
							<label for="conteudo"><h3>Pesquisar Notícias</h3></label>
							<input type="text" class="radius" placeholder="Pesquisa.." name="conteudo" id="conteudo" required="" />
						</div>
					</div>
					<div class="row">
						<div class="small-6 large-centered columns">
							<input class="button success" type="submit" value="Pesquisar" />
						</div>
					</div>
				</form>
			</div>
			<?php

            try {

                if (isset($_POST['conteudo'])) {
                    $conteudo = $_POST['conteudo'];
                    $sql = "select * from noticia where conteudo like '%$conteudo%'";
                    $stmt = $conexao -> prepare($sql);
                    $stmt -> execute();
                    while ($linha = $stmt -> fetch()) {
                        $autor = $linha['autor'];
                        $conteudo = $linha['conteudo'];
                        $id = $linha['id'];
                        $link_apagar = "apagar_noticia.php?id=" . $id;
                        $link_editar = "editando.php?id=" . $id . "&conteudo=" . $conteudo;
                        echo '<div class="row"> <p class="panel"><blockquote> ' . $conteudo . '<cite>' . $autor . '</cite><br><a href="' . $link_editar . '" class="small button" >Editar</a><a href="' . $link_apagar . '" class="small alert button" onclick="return confirm(Confirma exclusão?)">Apagar</a></blockquote></p> </div>';
                    }
                }
            } catch (PDOException $ex) {
                echo $ex -> getMessage();
                die();
            }
			?>
		</div>
	</body>
</html>
