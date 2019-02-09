<?php
include('../conexao.php');

$id = $_GET['id'];

		$query = "DELETE FROM imagem WHERE id_imagem = $id";
		$vai = $mysqli->query($query);			
		while($row = mysqli_fetch_array($vai)){
			$foto = $row['foto'];
		}
	echo $foto;
	unlink("C:/Program Files (x86)/EasyPHP-DevServer-14.1VC11/data/localweb/testes/admin/$foto");
		
?>

