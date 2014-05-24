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

		<form data-abide method="post" action="ope.php" id="formlogin" name="formlogin" >
			<div class="row">
				<div class="small-8">
					<div class="row">
						<div class="small-3 columns">
							<label for="email" class="right inline">E-Mail:</label>
						</div>
						<div class="small-9 columns">
							<input type="email" id="email" placeholder="joao@mail.com" required="">
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
                            <input type="password" id="senha" placeholder="****" required="">
                            <small class="error">Field required</small>
                        </div>
                    </div>
                </div>
                <div class="small-8">
                    <div class="row">
                        <div class="small-4 large-4 columns">
                            <input type="submit" class="button" value="Logar">
                        </div>
                    </div>
                </div>
			</div>
		</form>
		<script src="js/vendor/jquery.js"></script>
		<script src="js/foundation.min.js"></script>
		<script>
            $(document).foundation();
		</script>
	</body>
</html>