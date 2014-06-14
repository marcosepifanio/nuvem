<?php
require_once 'cabecalho.php';
?>

<html class="no-js" lang="pt br">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Fotos - Zuada</title>
		<link rel="stylesheet" href="css/foundation.css" />
		<script src="js/vendor/modernizr.js"></script>
	</head>
	<body>

		<div class="row">
			<div class="small-5 small-centered columns">
				<form action="up_blob.php" method="post" enctype="multipart/form-data">
					<fieldset>
						<p>
							Enviar Foto
						</p>
						<input type="file" name="arquivo" id="arquivo" />
						<input type="submit" class="button success small" name="enviar" value="Enviar" />
					</fieldset>
				</form>
			</div>
		</div>

		<?php

		require_once 'WindowsAzure\WindowsAzure.php';
		require_once 'user_key_blob.php';

		use WindowsAzure\Common\ServicesBuilder;
		use WindowsAzure\Blob\Models\CreateContainerOptions;
		use WindowsAzure\Blob\Models\PublicAccessType;
		use WindowsAzure\Common\ServiceException;

		$connectionString = "DefaultEndpointsProtocol=https;AccountName=$conta;AccountKey=$senha";
		$blobRestProxy = ServicesBuilder::getInstance() -> createBlobService($connectionString);

		try {
			// List blobs.
			$blob_list = $blobRestProxy -> listBlobs("fotoszuada");
			$blobs = $blob_list -> getBlobs();

			echo '<div class="row"><div class="small-6 large-centered columns"><ul data-orbit>';

			foreach ($blobs as $blob) {
				$nome = $blob -> getName();
				$link = $blob -> getUrl();
				echo '<li><img src="' . $link . '"></li>';
			}

			echo "</ul></div></div>";
		} catch(ServiceException $e) {
			// Handle exception based on error codes and messages.
			// Error codes and messages are here:
			// http://msdn.microsoft.com/en-us/library/windowsazure/dd179439.aspx
			$code = $e -> getCode();
			$error_message = $e -> getMessage();
			echo $code . ": " . $error_message . "<br />";
		}
	?>
		<script src="js/vendor/jquery.js"></script>
		<script src="js/foundation.min.js"></script>
		<script>
			$(document).foundation();
		</script>
	</body>
</html>
