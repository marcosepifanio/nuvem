<?php
require_once 'configuracao.php';
require_once 'cabecalho.php';
require_once 'session-start.php';
?>
<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Zuada ...LaLALa</title>

		<link rel="stylesheet" href="css/foundation.css" />
		<link rel="stylesheet" href="css/style.css" />
		<script src="js/vendor/modernizr.js"></script>
	</head>
	<body>
		<div class="row">

			<div class="row display">
				<div class="small-4 large-4 columns">
					<a href="#" data-reveal-id="firstModal" class="radius button">Cadastrar Nova Notícia</a>
				</div>
			</div>

			<div id="firstModal" class="reveal-modal" data-reveal>
				<div class="small-12 large-centered columns">

					<form method="post" action="enviando_noticia.php">
						<div class="row">
							<div class="large-12 columns">
								<label><h3>Publicar noticia</h3> 									<textarea placeholder="Notícia..." name="conteudo" required=""></textarea> </label>
							</div>
						</div>
						<div class="medium-4 columns">
							<input class="button success" type="submit" value="Publicar" />

						</div>
					</form>

				</div>
				<a class="close-reveal-modal">&#215;</a>
			</div>

			<?php
            $sql = mysql_query("SELECT * FROM noticias ORDER BY data Desc");

            while ($linha = mysql_fetch_array($sql)) {
                $autor = $linha['autor'];
                $conteudo = $linha['conteudo'];

                //echo '<p><blockquote> "'.$conteudo.'"<cite>'.$autor. '</cite></blockquote></p>';
                //echo '<p class="panel">'.$conteudo.'</p>';
                echo '<p class="panel"><blockquote> "' . $conteudo . '"<cite>' . $autor . '</cite></blockquote></p>';
            }
			?>
		</div>

		<script src="js/vendor/jquery.js"></script>
		<script src="js/foundation.min.js"></script>
		<script>
            $(document).foundation();
		</script>
	</body>
</html>