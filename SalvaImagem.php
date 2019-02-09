<?php
	$uploaddir = '/imagem/';
	$uploadfile = $uploaddir.basename($HTTP_POST_FILES['userfile']['tmp_name']);
	
	echo '<pre>';
	if(move_uploaded_file($HTTP_POST_FILES['userfile']['tmp_name'], $uploadfile)){
		echo "Deu certo";
	}else{
		echo "Tente outra vez\n";
	}
	
	echo "debugar ----------\n";
	print_r($HTTP_POST_FILES);
	print "</pre>";
?>