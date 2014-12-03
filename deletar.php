<?php
	include "classes/usuario.php";
	include "classes/usuarioDados.php";
	include "classes/usuarioDAO.php";
	require "validacao.php";


	if(isset($_POST)){

		$senha = $_POST["senha"];
		$userID = $_SESSION["idusuario"];

		$acoes = new UsuarioDAO();
		$dados = new Usuario($userID, "", $senha);

		$acoes->deletarConta($dados);

	}



	
?>