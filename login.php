<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Login - Zuada ...LaLALa</title>

		<link rel="stylesheet" href="css/foundation.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/normalize.css" />
		<script src="js/vendor/modernizr.js"></script>
	</head>
	<body id="background">
		<div id="caixa">
			<h2>Login</h2>
		</div>
		<div id="box">
			<div id="menu">
				<form data-abide method="post" action="confirmar-login.php" id="formlogin" name="formlogin" >
					<div class="row">
						<div class="small-8">
							<div class="row">
								<div class="small-3 columns">
									<label for="email" class="right inline">E-Mail:</label>
								</div>
								<div class="small-9 columns">
									<input class="radius" type="email" id="email" name="email" placeholder="joao@mail.com" required="">
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
									<input class="radius" type="password" id="senha" name="senha" placeholder="****" required="">
									<small class="error">Field required</small>
								</div>
							</div>
						</div>
						<div class="small-8">
							<div class="row">
								<input type="submit" class="button radius" title="Click para se logar"  value="Logar">
								<a href="cadastro.php" class="button radius" title="Cadastrar novo usuário" > Cadastrar</a>
							</div>
						</div>
				</form>
			</div>
		</div>
		<script src="js/vendor/jquery.js"></script>
		<script src="js/jquery.validate.min.js"></script>
		<script src="js/foundation.min.js"></script>
		<script>
            $(document).foundation({
            });
		</script>
	</body>
</html>