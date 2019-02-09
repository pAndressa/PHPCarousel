<?php
	include('../conexao.php');
	
$id = $_GET['id'];

	$nome = $_FILES['altera'];
	$tipo = $nome["type"];
	
	
	
	$query_alt = "select * from imagem where id_imagem ='$id'";
	$vai = $mysqli->query($query_alt);			
	while($row = mysqli_fetch_array($vai)){
		$foto = $row['foto'];
	}
	echo $foto;
	unlink("C:/Program Files (x86)/EasyPHP-DevServer-14.1VC11/data/localweb/testes/admin/$foto");
	
	if(preg_match("/^image\/(gif|jpeg|jpg|png)$/", $tipo)) {
		if (is_uploaded_file($_FILES['altera']['tmp_name']))
		{
			
			$nome = $_FILES['altera']['name'];

			move_uploaded_file($_FILES['altera']['tmp_name'], 'uploads/' . $nome);
			
			$filelocation = 'uploads/'. $nome;

			$query = "update imagem set foto ='$filelocation' where id_imagem = '$id'";
			$mysqli->query($query);
		}
	}		
		
?>
