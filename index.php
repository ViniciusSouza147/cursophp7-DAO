<?php 

	require_once("config.php");

	// Carrega um Usuario
	//$root = new Usuario();
	//$root -> LoadById(10);
	//echo $root;

	// Carrega uma lista de Usuarios
	//$lista = Usuario::getList();
	//echo json_encode($lista);

	//Carrega uma lista de busca por login
	//$search = Usuario::search("v");
	//echo json_encode($search);

	//Carrega usuario usando lofin e senha
	//$usuario = new Usuario();
	//$usuario -> login("vinicius", "15624987");
	//echo $usuario;

	//Incluir novo Usuario
	//$aluno = new Usuario("nana","nasp");
	//$aluno->insert();
	//echo $aluno;

	$usuario = new Usuario();
	$usuario -> LoadById(20);
	$usuario->update("linda", "mundo");

	echo $usuario;

 ?>