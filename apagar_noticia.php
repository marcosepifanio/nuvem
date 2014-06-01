<?php
	require_once "configuracao.php";
	
	if(isset($_GET['id'])){
  	$id = $_GET['id'];
	  //codigo apagar id
	$query = "FROM noticias WHERE id = '$id'"; 
	mysql_query($query);
	
  } else{
  	echo "<h3>variavel nao setada</h3>";
  }    
?>