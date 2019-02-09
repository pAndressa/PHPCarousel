<html>
<body>
	<table border="1" cellspacing="0" cellpadding="2">
	<tbody>
		<tr>
			<td>Imagem</td>
			<td>Alterar</td>
			<td>Excluir</td>
		</tr>
		
<?php
	
	include('../conexao.php');
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		//exit();
	}
	$result = "SELECT * from imagem order by id_imagem";
	$query = $mysqli->query($result);
	
	while ($colacunois = mysqli_fetch_array($query)){
	
	$caminho = $colacunois['foto'];
	list($up,$seila) = explode('/',$caminho); 
	
?>
			<tr><td><?php echo $seila;?></td><td>Alterar</td><td>Excluir</td></tr>
<?php }?>
</table>
</body>
</html>