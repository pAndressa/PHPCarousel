<?php
include('../conexao.php');

$nome = $_FILES['arquivo'];
$tipo = $nome["type"];

if(preg_match("/^image\/(gif|jpeg|jpg|png)$/", $tipo)) {
	if (is_uploaded_file($_FILES['arquivo']['tmp_name']))
	{
		$nome = $_FILES['arquivo']['name'];

		move_uploaded_file($_FILES['arquivo']['tmp_name'], 'uploads/' . $nome);
		
		$filelocation = 'uploads/'. $nome;
		
		$query = "INSERT INTO imagem (id_imagem,foto) VALUES (null,'$filelocation')";
		$mysqli->query($query);

		echo "Upload realizado";

		
	}
}else{
	echo "Não foi possível enviar a foto";
}

?>

