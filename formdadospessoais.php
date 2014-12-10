<?php
	require "validacao.php";
	include "classes\usuarioDAO.php";
	include "header.php";
?>

<main>
	<?php
		$dao = new usuarioDAO();
		$dados = $dao->retornarDados($_SESSION["idusuario"]);

		if($dados == null){
			$nome = "";
			$sobrenome = "";
			$nascimento = "";
			$endereco = "";
			$bairro = "";
			$cidade = "";
			$estado = "";
			$profissao = "";

		}else{
			$nome = $dados->nome;
			$sobrenome = $dados->sobrenome;
			$nascimento = $dados->nascimento;
			$endereco = $dados->endereco;
			$bairro = $dados->bairro;
			$cidade = $dados->cidade;
			$estado = $dados->estado;
			$profissao = $dados->profissao;
		}


	?>
	<form action="atualizarcadastro.php" method="post" class="form-atualizar-cadastro">
		<h1>Dados Pessoais</h1>

		<div class="form-nome">
			<label for="nome">Nome: </label>
			<input type="text" name="nome" id="nome" placeholder="Insira seu nome" value="<?php echo $nome ?>"/>
		</div>
		<div class="form-sobrenome">
			<label for="sobrenome">Sobrenome: </label>
			<input type="text" name="sobrenome" id="sobrenome" placeholder="Insira seu sobrenome" value="<?php echo $sobrenome ?>"/>
		</div>
		<div class="form-nascimento">
			<label for="nascimento">Nascimento: </label>
			<input type="text" name="nascimento" id="nascimento" placeholder="Insira sua data de nascimento" value="<?php echo $nascimento ?>"/>
		</div>
		<div class="form-endereco">
			<label for="endereco">Endereço: </label>
			<input type="text" name="endereco" id="endereco" placeholder="Insira seu endereco" value="<?php echo $endereco ?>"/>
		</div>
		<div class="form-bairro">
			<label for="bairro">Bairro: </label>
			<input type="text" name="bairro" id="bairro" placeholder="Insira seu bairro" value="<?php echo $bairro ?>"/>
		</div>
		<div class="form-cidade">
			<label for="cidade">Cidade</label>
			<input type="text" name="cidade" id="cidade" placeholder="Insira sua cidade" value="<?php echo $cidade ?>"/>
		</div>
		<div class="form-estado">
			<label for="estado">Estado</label>
			<input type="text" name="estado" id="estado" placeholder="Insira seu estado" value="<?php echo $estado ?>"/>
		</div>
		<div class="form-profissao">
			<label for="profissao">Profissão: </label>
			<input type="text" name="profissao" id="profissao" placeholder="Insira sua profissao" value="<?php echo $profissao ?>"/>
		</div>
		<div class="form-enviar">
			<input type="submit" value="Enviar">
		</div>
	</form>
</main>
<?php include "footer.php"; ?>