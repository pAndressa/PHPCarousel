<?php 
require_once('Header.html');?>
<html>
<head>
<title>Inicio</title><!--site do jquery cycle-->
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="scripts/jcarousel.js"></script>
<script type="text/javascript">
	$(function(){
		$("#carousel").jCarouselLite({
			visible:1,
			speed:700,/*velocidade que vai troocar slide*/
			auto:1000
			
		}) 
	})
</script>

</head>
<body>
	<article>
		<div id="carousel">
			<ul>
<?php
	
	include('conexao.php');
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		//exit();
	}
	$result = "SELECT * from imagem order by id_imagem";
	$query = $mysqli->query($result);
	
	//Echo "<img src='".$sql['foto'] ."'> ";
	
	while ($colacunois = mysqli_fetch_array($query)){
		//echo "<td>".$colacunois['id_imagem']."</td>";
		//echo "<img width = '800' height = '400' src='".$colacunois ['foto']."''alt = 'fotos'/> ";
		
	
//print_r($cont);
?>
			<li><?php echo"<img src='admin/".$colacunois ['foto']."''alt = 'fotos'/> ";?></li>	
<?php
}  
?>	
			</ul>
		</div>
	</article>
</body>
</html>

<!-- http://www.oficinadanet.com.br/post/9062-upload-de-imagem-com-php-e-mysql -->