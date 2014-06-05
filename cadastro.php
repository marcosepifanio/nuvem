<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Cadastro - Zuada ...LaLALa</title>

		<link rel="stylesheet" href="css/foundation.css" />
		<link rel="stylesheet" href="css/normalize.css" />
		<link rel="stylesheet" href="css/style.css" />
	</head>
	<body id="background">
		<div id="caixa">
			<h2>Cadastro de Usuários</h2>
		</div>
		<div id="boxCadastro">
			<form method="post" action="inserir.php" id="form1">

				<div class="small-8">
					<div class="row">
						<div class="small-3 columns">
							<label for="nome" class="right inline">Usuário:</label>
						</div>
						<div class="small-9 columns">
							<input type="text" name="nome" id="nome" class="required radius" />
						</div>
					</div>
				</div>

				<div class="small-8">
					<div class="row">
						<div class="small-3 columns">
							<label for="email" class="right inline">E-Mail:</label>
						</div>
						<div class="small-9 columns">
							<input type="email" name="emailCadastro" id="email" class="required radius" />
						</div>
					</div>
				</div>

				<div class="small-8">
					<div class="row">
						<div class="small-3 columns">
							<label for="password" class="right inline">Senha:</label>
						</div>
						<div class="small-9 columns">
							<input type="password" name="password" id="password" class="required radius" />
						</div>
					</div>
				</div>

				<div class="small-8">
					<div class="row">
						<div class="small-3 columns">
							<label for="confirmPassword" class="right inline">Confirmar Senha:</label>
						</div>
						<div class="small-9 columns">
							<input type="password" name="confirmPassword" id="confirmPassword" class="required radius" />
						</div>
					</div>
				</div>

				<div class="small-8">
					<div class="row">
						<input class="button radius" type="submit" value="Cadastrar" title="Concluir cadastro"  />
						<input class="button radius" type="reset" value="Limpar" title="Limpar campos" />
						<a href="login.php" class="button radius" title="Voltar para login" >Voltar</a>
					</div>
				</div>
			</form>
		</div>

		<div>
			<script src="js/vendor/jquery.js"></script>
			<script src="js/jquery.validate.min.js"></script>
			<script>
                $(document).ready(function() {
                    $("#form1").validate({
                        rules : {
                            nome : {
                                required : true,
                                minlength : 4
                            },
                            emailCadastro : {
                                required : true,
                                email : true
                            },
                            password : {
                                required : true,
                                minlength : 4
                            },
                            confirmPassword : {
                                required : true,
                                equalTo : "#password"
                            }
                        },
                        messages : {
                            nome : {
                                required : "Campo Obrigatório",
                                minlength : "O nome deve ter no mínimo 4 caracteres"
                            },
                            emailCadastro : {
                                required : "Campo Obrigatório",
                                email : "Digite um email válido"
                            },
                            password : {
                                required : "Campo Obrigatório",
                                minlength : "A senha deve ter no mínimo 4 caracteres"
                            },
                            confirmPassword : {
                                equalTo : "Digite uma senha igual a anterior",
                                required : "Campo Obrigatório"
                            }
                        }
                    });
                });
			</script>
	</body>
</html>
