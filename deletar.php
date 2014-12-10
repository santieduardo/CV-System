<?php include "header.php"; ?>
<?php
	include "classes/usuario.php";
	include "classes/usuarioDados.php";
	include "classes/usuarioDAO.php";
	require "validacao.php";

	$senha = $_POST["senha"];
	$userID = $_SESSION["idusuario"];

	$user = new Usuario($userID, "", $senha);
	$acoes = new UsuarioDAO();
	$dados = $acoes->deletarConta($user);

?>
<?php include "footer.php"; ?>