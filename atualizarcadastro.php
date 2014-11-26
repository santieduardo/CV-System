<?php include "header.php"; ?>

	<?php 
		
	
		include "classes/usuario.php";
		include "classes/UsuarioDados.php";
		include "classes/usuarioDAO.php";
		require "validacao.php";
		

		$nome = $_POST["nome"];
		$sobrenome = $_POST["sobrenome"];
		$nascimento = $_POST["nascimento"];
		$endereco = $_POST["endereco"];
		$bairro = $_POST["bairro"];
		$cidade = $_POST["cidade"];
		$estado = $_POST["estado"];
		$profissao = $_POST["profissao"];

		$userID = $_SESSION["idusuario"];

		($userID, "", "", "", "", "", "", "", "", $cargo, $inicio, $termino, $atividades)
		$user = new UsuarioDados($userID, $nome, $sobrenome, $nascimento, $endereco, $bairro, $cidade, $estado, $profissao, "", "", "", "");
		
		//echo $user;
		
		$acoes = new UsuarioDAO();
		if($acoes)
			echo "CONEXAO.";
		else
			echo "erro";

		$dados = $acoes->atualizarDados($user);

	?>


<?php include "footer.php"; ?>

