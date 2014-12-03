<?php
	require "validacao.php";
	include "classes\usuarioDAO.php";
	include "header.php";
?>

<main>
	<?php
			$dao = new usuarioDAO();
			$dados = $dao->retornarDados($_SESSION["idusuario"]);
	?>
	<form action="atualizarcadastro.php" method="post" class="form-atualizar-cadastro">
		<h1>Dados Pessoais</h1>

		<div class="form-nome">
			<label for="nome">Nome: </label>
			<input type="text" name="nome" id="nome" value="<?php echo $dados->nome ?>"/>
		</div>
		<div class="form-sobrenome">
			<label for="sobrenome">Sobrenome: </label>
			<input type="text" name="sobrenome" id="sobrenome" value="<?php echo $dados->sobrenome ?>"/>
		</div>
		<div class="form-nascimento">
			<label for="nascimento">Nascimento: </label>
			<input type="text" name="nascimento" id="nascimento" value="<?php echo $dados->nascimento ?>"/>
		</div>
		<div class="form-endereco">
			<label for="endereco">Endereço: </label>
			<input type="text" name="endereco" id="endereco" value="<?php echo $dados->endereco ?>"/>
		</div>
		<div class="form-bairro">
			<label for="bairro">Bairro: </label>
			<input type="text" name="bairro" id="bairro" value="<?php echo $dados->bairro ?>"/>
		</div>
		<div class="form-cidade">
			<label for="cidade">Cidade</label>
			<input type="text" name="cidade" id="cidade" value="<?php echo $dados->cidade ?>"/>
		</div>
		<div class="form-estado">
			<label for="estado">Estado</label>
			<input type="text" name="estado" id="estado" value="<?php echo $dados->estado ?>"/>
		</div>
		<div class="form-profissao">
			<label for="profissao">Profissão: </label>
			<input type="text" name="profissao" id="profissao" value="<?php echo $dados->profissao ?>"/>
		</div>
		<div class="form-enviar">
			<input type="submit" value="Enviar">
		</div>
	</form>
</main>
<?php include "footer.php"; ?>