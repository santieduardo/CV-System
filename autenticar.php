<?php

if(isset($_POST)){
	include "classes/usuario.php";
	include "classes/usuarioDAO.php";

	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$usuario = new Usuario("", $email, $senha);
	$acoes = new UsuarioDAO();

	if(($dados = $acoes->autenticar($usuario)) == null){
		echo "Dados inválidos!";
		header("refresh:3; url=login.php");
	}else{
		session_start();
		$_SESSION["id"] = session_id();
		date_default_timezone_set("America/Sao_Paulo");
		$_SESSION["datahora"] = date("d/m/Y H:i:s");
		header("Location: main.php");

	}

}



?>