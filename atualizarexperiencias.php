<?php include "header.php"; ?>

	<?php 
		
	
		include "classes/usuario.php";
		include "classes/UsuarioDados.php";
		include "classes/usuarioDAO.php";
		require "validacao.php";
		

		$cargo = $_POST["cargo"];
		$inicio = $_POST["inicio"];
		$termino = $_POST["termino"];
		$atividades = $_POST["atividades"];
		
		$userID = $_SESSION["idusuario"];

		//($userID, "", "", "", "", "", "", "", "", $cargo, $inicio, $termino, $atividades)		
		$user = new UsuarioDados($userID, "", "", "", "", "", "", "", "", $cargo, $inicio, $termino, $atividades);
		
		//echo $user;
		
		$acoes = new UsuarioDAO();
		if($acoes)
			echo "CONEXAO.";
		else
			echo "erro";

		$dados = $acoes->atualizarExperiencias($user);

	?>


<?php include "footer.php"; ?>
