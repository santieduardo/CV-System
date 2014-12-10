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

	echo "<div class='area-pessoal'><h1 class='aviso-default'>Sua conta foi deletada com sucesso</h1></div>";
	header("refresh:3; url=index.php");

?>
<?php include "footer.php"; ?>