<?php
	require_once "configuracao.php";
	
	if(isset($_GET['id'])){
  	$id = $_GET['id'];
	//echo $id;
	  //codigo apagar id
	$sql = "DELETE FROM noticias WHERE id = :id"; 
	$stmt = $conexao -> prepare($sql);
	$stmt -> bindValue(':id', $id);
	$stmt -> execute();
	$redirecionar = "noticias.php";
    header("Location: $redirecionar");
	
  } else{
  	echo "<h3>variavel nao setada</h3>";
  }    
?>