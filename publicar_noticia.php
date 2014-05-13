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

		<!-- form para enviar noticia-->
		<!-- obs: validar entrada depois-->
		<div class="row">

			<div class="small-12 large-centered columns">
				<h3>Publicar noticia</h3>
				<form method="post" action="enviando_noticia.php">
					<input type="text" placeholder="noticia..." name="conteudo" >
					<button type="submit">
						Publicar
					</button>
				</form>

			</div>
		</div>
		<!-- fim do form-->

		<script src="js/vendor/jquery.js"></script>
		<script src="js/foundation.min.js"></script>
		<script>
            $(document).foundation();
		</script>

	</body>
</html>
