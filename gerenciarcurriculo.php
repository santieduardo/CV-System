
<html>
<head>
	<?php
		require "validacao.php";
		include "header.php";
	?>
	<li><a href="logout.php">Sair</a></li>

	<title>CV System - Gerenciar Curriculo</title>

</head>

<body>

	<div class="form-senha">
		

<form action="atualizarcadastro.php" method="post" class="form-cadastro">

		<label for="teste">Dados</label>
		<br/>
		<label for="nome">Nome: </label>
		<input type="text" name="nome" id="nome"/>

		<label for="sobrenome">Sobrenome: </label>
		<input type="text" name="sobrenome" id="sobrenome"/>

		<label for="dtn">Nascimento: </label>
		<input type="text" name="dtn" id="dtn"/>

		<label for="endereco">Endereço: </label>
		<input type="text" name="endereco" id="endereco"/>

		<label for="bairro">Bairro: </label>
		<input type="text" name="bairro" id="bairro"/>

		<label for="cidade">Cidade</label>
		<input type="text" name="cidade" id="cidade"/>

		<label for="estado">Estado</label>
		<input type="text" name="estado" id="estado"/>

		<label for="profissao">Profissão: </label>
		<input type="text" name="profissao" id="profissao"/>


		<input type="submit" value="Atualizar Curriculo">

		<form/>

		<br/><br/>

	</div>

</body>

<footer>
	<?php include "footer.php";?>
	
</footer>

</html>