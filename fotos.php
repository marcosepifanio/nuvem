<?php
require_once 'cabecalho.php';
?>
<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Zuada ...LaLALa</title>

		<link rel="stylesheet" href="css/foundation.css"/>

		<script src="js/vendor/modernizr.js"></script>
	</head>
	<body>

		<?php

        require_once 'WindowsAzure\WindowsAzure.php';

        use WindowsAzure\Common\ServicesBuilder;
        use WindowsAzure\Blob\Models\CreateContainerOptions;
        use WindowsAzure\Blob\Models\PublicAccessType;
        use WindowsAzure\Common\ServiceException;

       $yourAccount = "portalvhds3tq44pd0313pb";
$yourKey = "ICnCp+Q6Y4f+s9OxiPfcoeJsWKE9/EPL8Zs+P/pBA7cM41kR/2IIR1bWYCaV7WDqZpnx2GhXDWFIXXCoka8qkw=="; $connectionString = "DefaultEndpointsProtocol=https;AccountName=$yourAccount;AccountKey=$yourKey";
        $blobRestProxy = ServicesBuilder::getInstance() -> createBlobService($connectionString);

        try {
            $blob_list = $blobRestProxy -> listBlobs("imagens");
            $blobs = $blob_list -> getBlobs();
            $linha = 0;
            foreach ($blobs as $blob) {
                $linha++;
                $nome = $blob -> getName();
                $link = $blob -> getUrl();
                if ($linha == 1) {
                    echo '<div class="row">';
                }
                echo '<div class="large-6 columns"><img class="th" src="' . $link . '" /></div>';


                if ($linha == 4) {
                    echo '</div>';
                    $linha = 0;
                }
            }
        } catch(ServiceException $e) {

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