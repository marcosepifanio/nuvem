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

			<div class="row">
				<div class="medium-8 small-4 large-4 columns" id="boxButton">
					<a href="#" data-reveal-id="firstModal" title="Cadastrar Notícia" class="radius button large-8">Cadastrar Nova Ata</a>
				</div>
			</div>

			<div id="firstModal" class="reveal-modal" data-reveal>
				<div class="small-12 large-centered columns">

					<form method="post" action="enviar-ata.php">
						<div class="row">
							<div class="large-12 columns">
								<label for="cadastroAta"><h3>Cadastrar Ata</h3> 									<textarea placeholder="Notícia..." name="conteudo" required=""></textarea> </label>
							</div>
						</div>
						<div class="medium-4 columns">
							<input class="button success" id="cadastroAta" type="submit" value="Cadastrar" title="Cadastrar De Ata" />
						</div>
					</form>

				</div>
				<a class="close-reveal-modal">&#215;</a>
			</div>

			<?php
            $sql = "SELECT * FROM ata ORDER BY data desc";
            $stmt = $conexao -> prepare($sql);
            $stmt -> execute();
            while ($linha = $stmt -> fetch()) {
                $autor = $linha['autor'];
                $conteudo = $linha['conteudo'];
                $data = implode("/",array_reverse(explode("-",$linha['data'])));
                echo '<p class="panel"><blockquote> ' . $conteudo . '<cite>' . $autor .  ' no dia '. $data . '    </cite></blockquote></p>';
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