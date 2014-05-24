<?php
require_once 'session-start.php';
require_once 'cabecalho.php';
?>

<html class="no-js" lang="pt br">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Foundation | Welcome</title>
		<link rel="stylesheet" href="css/foundation.css" />
		<script src="js/vendor/modernizr.js"></script>
	</head>
	<body>
		<form action="up_blob.php" method="post" enctype="multipart/form-data">
			<fieldset>
				<p>
					<label for="Enviar arquivo">Enviar arquivo:</label>
				</p>
				<input type="file" name="arquivo" class="width233" />
				<input type="submit" name="enviar" value="Enviar" />
			</fieldset>
		</form>
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
            $blob_list = $blobRestProxy -> listBlobs("imagens");
            $blobs = $blob_list -> getBlobs();
            $linha = 0;
            foreach ($blobs as $blob) {
                $linha++;
                $nome = $blob -> getName();
                $link = $blob -> getUrl();
                if ($linha == 1) {//estou colocando a div rows de forma dinamica
                    echo '<div class="row">';
                }

                echo '<div class="large-3 columns"> <a class="th" href="' . $link . '"><img src="' . $link . '"></a></div>';
                echo '<div class="large-3 columns"> <a class="th" href="foto.php?imagem="' . $link . '"><img src="' . $link . '"></a></div>';

                if ($linha == 4) {
                    echo '</div>';
                    $linha = 0;
                }
            }
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
