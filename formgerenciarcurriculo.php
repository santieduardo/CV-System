<?php
	require "validacao.php";
	include "header.php";
?>

<main>
	<form action="atualizarcadastro.php" method="post" class="form-atualizar-cadastro">
		<h1>Atualizar Dados</h1>

		<div class="form-nome">
			<label for="nome">Nome: </label>
			<input type="text" name="nome" id="nome"/>
		</div>
		<div class="form-sobrenome">
			<label for="sobrenome">Sobrenome: </label>
			<input type="text" name="sobrenome" id="sobrenome"/>
		</div>
		<div class="form-nascimento">
			<label for="nasc">Nascimento: </label>
			<input type="text" name="nasc" id="nasc"/>
		</div>
		<div class="form-endereco">
			<label for="endereco">Endereço: </label>
			<input type="text" name="endereco" id="endereco"/>
		</div>
		<div class="form-bairro">
			<label for="bairro">Bairro: </label>
			<input type="text" name="bairro" id="bairro"/>
		</div>
		<div class="form-cidade">
			<label for="cidade">Cidade</label>
			<input type="text" name="cidade" id="cidade"/>
		</div>
		<div class="form-estado">
			<label for="estado">Estado</label>
			<input type="text" name="estado" id="estado"/>
		</div>
		<div class="form-profissao">
			<label for="profissao">Profissão: </label>
			<input type="text" name="profissao" id="profissao"/>
		</div>
		<div class="form-enviar">
			<input type="submit" value="Atualizar CV">
		</div>
	</form>
</main>
<?php include "footer.php"; ?>