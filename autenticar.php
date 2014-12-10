<?php
	include "classes/usuario.php";
	include "classes/usuarioDAO.php";
	include "header.php";

if(isset($_POST)){

	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$usuario = new Usuario("", $email, $senha);
	$acoes = new UsuarioDAO();

	if(($dados = $acoes->autenticar($usuario)) == null){
		echo "<div class='area-pessoal'><h1 class='aviso-default'>Seus dados estão incorretos</h1></div>";
		header("refresh:3; url=login.php");
	}else{
		session_start();
		$_SESSION["id"] = session_id();
		date_default_timezone_set("America/Sao_Paulo");
		$_SESSION["datahora"] = date("d/m/Y H:i:s");
		$_SESSION["idusuario"] = $dados["id"];
 
		header("Location: main.php");

	}

}
	
	include "footer.php";
?>