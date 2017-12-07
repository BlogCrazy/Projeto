<?php
	#CONFIGURAR CONEXÃO
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$bancoDados = "Blook";
	$tabelaUsuarios = "usuarios";
	
	$conexao = mysqli_connect($servidor,$usuario,$senha,$bancoDados);
	
	if($conexao){
		return $conexao;
	}