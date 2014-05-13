<?php
include ("configuracao.php");
?>

<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Zuada ...LaLALa</title>

		<link rel="stylesheet" href="css/foundation.css" />
		<script src="js/vendor/modernizr.js"></script>
	</head>
	<body>

		<!--menu top-->

		<nav class="top-bar docs-bar hide-for-small" data-topbar="">
			<ul class="title-area">
				<li class="name">
					<h1><a href="index.php">Home</a></h1>
				</li>
			</ul>

			<section class="top-bar-section">
				<ul class="right">
					<li>
						<a href="agenda.php" class="">Agenda</a>
					</li>
					<li class="divider"></li>
					<li>
						<a href="calendario.php" class="">Calendario</a>
					</li>
					<li class="divider"></li>
					<li>
						<a href="atas.php" class="">Atas</a>
					</li>
					<li class="divider"></li>
					<li>
						<a href="noticias.php" class="">Noticias</a>
					</li>
					<li class="divider"></li>
				</ul>
			</section>
		</nav>

		<!-- FIM DO MENU-->
		<!-- LISTANDO NOTICIAS-->
		<div class="row">
			<div class="small-11 small-centered columns">
				<h1>Noticias</h1>
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
