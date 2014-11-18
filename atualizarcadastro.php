<html>
<head>
	<?php include "header.php"; ?>
	<title>Cadastro atualizado</title>
</head>

<body>

	<?php 

		include "classeBD.php";
		include "usuario.php";

		$nome = $_POST["nome"];
		$sobrenome = $_POST["sobrenome"];
		$dtn = $_POST["dtn"];
		$endereco = $_POST["endereco"];
		$bairro = $_POST["bairro"];
		$cidade = $_POST["cidade"];
		$estado = $_POST["estado"];
		$profissao = $_POST["profissao"];

		
		$acoes = new UsuarioDados($id, $nome, $sobrenome, $nascimento, $endereco, $bairro, $estado, $profissao);

		if($acoes){

			echo "Sucesso";

		}

		$acoes->atualizarDados();
		



	?>

</body>

<footer> <?php include "footer.php"; ?></footer>

</html>