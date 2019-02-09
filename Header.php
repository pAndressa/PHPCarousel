<?php header('Content-type: text/plain; charset=utf-8'); ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('li').bind('mouseover', openSubMenu);
		$('li').bind('mouseout', closeSubMenu);
		
		function openSubMenu() {
			$(this).find('ul').css('visibility', 'visible');	
		};
		
		function closeSubMenu() {
			$(this).find('ul').css('visibility', 'hidden');	
		};
				   
	});
</script>
</head>
<body>
	<div id = "tudo">
		<header>
		Blog Sussa
		</header>
		<div id = "menu">
		<nav>
			<ul>
				<li><a href ="#">Brasil</a>
				<ul>
					<li><a href="#">Centro-Oestre</a></li>
					<li><a href="#">Norte</a></li>
					<li><a href="#">Nordeste</a></li>
					<li><a href="#">Sudeste</a></li>
					<li><a href="#">Sul</a></li>
				</ul>
				</li>
				<li><a href="#">Internacional</a>
					<ul>
					<li><a href="#">África</a></li>
					<li><a href="#">América Central</a></li>
					<li><a href="#">América do Norte</a></li>
					<li><a href="#">América do Sul</a></li>
					<li><a href="#">Antártida</a></li>
					<li><a href="#">Asia</a></li>
					<li><a href="#">Europa</a></li>
					<li><a href="#">Oceania</a></li>
					<li><a href="#">Oriente Médio</a></li>
				</ul>
				</li>
				<li><a href="#">Contatos</a></li>
				<li><a href="#">Dicas</a></li>
				<li><a href="#">Editores</a></li>
			</ul>
		</nav>
		</div>
	</div>
</body>
</html>
