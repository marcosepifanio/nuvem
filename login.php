<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Login - Zuada ...LaLALa</title>

		<link rel="stylesheet" href="css/foundation.css" />
		<script src="js/vendor/modernizr.js"></script>
	</head>
	<body>

		<form data-abide method="post" action="confirmar-login.php" id="formlogin" name="formlogin" >
			<div class="row">
				<div class="small-8">
					<div class="row">
						<div class="small-3 columns">
							<label for="email" class="right inline">E-Mail:</label>
						</div>
						<div class="small-9 columns">
							<input type="email" id="email" name="email" placeholder="joao@mail.com" required="">
							<small class="error">Field required</small>
						</div>
					</div>
				</div>
				<div class="small-8">
					<div class="row">
						<div class="small-3 columns">
							<label for="senha" class="right inline">Senha:</label>
						</div>
						<div class="small-9 columns">
							<input type="password" id="senha" name="senha" placeholder="****" required="">
							<small class="error">Field required</small>
						</div>
					</div>
				</div>

				<div class="small-8">
					<div class="row">
						<input type="submit" class="button" value="Logar">
						<a href="#" class="button" data-reveal-id="myModal">Cadastrar</a>
					</div>
				</div>
		</form>
		<div id="myModal" class="reveal-modal" data-reveal>
			<form method="post" action="inserir.php">

				<h3>Cadastrar Usuário</h3>

				<label for="nome">Usuário:
					<input type="text" id="nome" name="nome" placeholder="Joao.Ico" >
				</label>
				<label for="emailCadastro">E-Mail:
					<input type="email" id="emailCadastro" name="emailCadastro" placeholder="Joao.Ico@gmail.com" >
				</label>
				<label for="password">Senha:
					<input type="password" id="password" name="password">
				</label>

				<input type="submit" class="button" value="Cadastrar">

			</form>
			<a class="close-reveal-modal">&#215;</a>
		</div>

		</div>

		<script src="js/vendor/jquery.js"></script>
		<script src="js/foundation.min.js"></script>
		<script>
            $(document).foundation();
		</script>
	</body>
</html>