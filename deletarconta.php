<?php include "header.php"; ?>
	<form action="deletar.php" method="post" class="form-cadastro">
		<h1>Deletar Conta</h1>
		
		<div class="form-senha">
			<label for="senha">Confirmar Senha:</label>
			<input type="password" name="senha" id="senha" placeholder="Insira sua Senha" required>
		</div>
		<div class="form-enviar">
			<input type="submit" value="Enviar">
		</div>
	</form>
<?php include "footer.php"; ?>