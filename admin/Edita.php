<html>
<head></head>
<body>
<?php 
	$id = $_GET['id'];
?>
     <form method="POST" action="Altera.php?id=<?php echo $id ?>" id="formulario"  name="formulario" enctype="multipart/form-data">

		 <input type="file" id="altera" name="altera" size="60" />
		
		<div class = "msg" > 
			<input type="submit" id = "btn_envia" value= "Salvar" />
		</div>
     </form>
	 
</body>
</html>