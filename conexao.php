<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'test';

// Conecta-se ao banco de dados MySQL
$mysqli = new mysqli($servidor, $usuario, $senha, $banco);

// Caso algo tenha dado errado, exibe uma mensagem de erro
if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());

	/*$conexao = mysqli_connect("127.0.0.1","root","");
	mysqli_select_db("test",$conexao);*/
?>
