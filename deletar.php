<?php
	include "classes/usuario.php";
	include "classes/usuarioDados.php";
	include "classes/usuarioDAO.php";
	require "validacao.php";



	if(isset($_POST)){

		$senha = $_POST["senha"];

		$acoes = new UsuarioDAO();
		if($acoes)
			echo "CONEXAO.";
		else
			echo "erro";

		$acoes->deletarConta(retonarID());

	}



	
?>