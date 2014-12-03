<?php 
include "header.php";
include "classes\usuarioDAO.php";
include "validacao.php"
?>

<main>
		<?php
			$dao = new usuarioDAO();
			$dados = $dao->retornarExperiencias($_SESSION["idusuario"]);
		?>
	<form action="atualizarexperiencias.php" method="post" class="form-inserir-experiencias">
		<h1>Experiências</h1>

		<div class="form-cargo">
			<label for="cargo">Cargo: </label>
			<input type="text" name="cargo" id="cargo" placeholder="Insira seu cargo" value="<?php echo $dados->cargo ?>" />
		</div>
		<div class="form-inicio">
			<label for="inicio">Inicio: </label>
			<input type="text" name="inicio" id="inicio" placeholder="Insira a data de início" value="<?php echo $dados->inicio ?>"/>
		</div>
		<div class="form-termino">
			<label for="termino">Termino: </label>
			<input type="text" name="termino" id="termino" placeholder="Insira a data de término" value="<?php echo $dados->termino ?>"/>
		</div>
		<div class="form-atividades">
			<label for="atividades">Atividades: </label>
			<textarea name="atividades" id="atividades" rows="4" cols="28" placeholder="Insira as suas atividades deste cargo" ><?php echo $dados->atividades ?></textarea>
		</div>
		<div class="form-enviar">
			<input type="submit" value="Enviar">
		</div>
	</form>
</main>
<?php include "footer.php"; ?>