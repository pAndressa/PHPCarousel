<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Alterar</title>

 <!-- Bootstrap -->
 <link href="css/bootstrap.min.css" rel="stylesheet">

 <!-- Styles -->
 <!--<link href="css/style.css" rel="stylesheet">-->

 <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
 <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 <!--[if lt IE 9]>
 <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
 <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
 <![endif]-->
</head>
<body>
<div class="page-header">
  <h1>Example page header <small>Subtext for header</small></h1>
</div>
<nav>
<ul class="nav nav-pills">
  <li role="presentation" class="active"><a href="#">Home</a></li>
  <li role="presentation"><a href="#">Profile</a></li>
  <li role="presentation"><a href="#">Messages</a></li>
</ul>
</nav>
 <div class="container">
	<div class="panel panel-default">
		<div class="panel-heading">Incluir Imagens</div>
		<div class="panel-body">
			 <form method="POST" action="cadastra_arquivo2.php" id="formulario"  name="formulario" enctype="multipart/form-data">

					 <input type="file" id="arquivo" name="arquivo" size="60" />
					
					<div class = "msg" > 
					 <input type="submit" id = "btn_envia" value= " Enviar" />
					</div>
				</form>
		</div>
	</div>
		
	 
	<!--<div class="row">
		<div class="col-md-12"> Tudo</div>
        <div class="col-md-4"><img src ="" /></div>
        <div class="col-md-4"> gggg</div>
		<div class="col-md-4"> gggg</div>
    </div>-->
	<div class="panel panel-default">
		<div class="panel-heading">Alterar Imagens</div>
		<div class="panel-body">
			<table class="table table-hover">
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
			<tr><td><?php echo $seila; ?></td>
			<td><a href="Edita.php?id=<?php  $id = $colacunois['id_imagem']; echo $id;?>">Alterar</a></td><td>
			<a href="exclui.php?id=<?php  $id = $colacunois['id_imagem']; echo $id;?>">Excluir </a></td></tr>
<?php }?>
			
			
		
				</tbody>
			</table>
		</div>
	</div>
 </div>

 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
 <!-- Include all compiled plugins (below), or include individual files as needed -->
 <script src="js/bootstrap.min.js"></script>
</body>
</html>