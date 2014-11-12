<?php include "header.php"; ?>
	<form action="autenticar.php" method="post" class="form-cadastro">
		<h1>Logue-se</h1>
		
		<div class="form-email">
			<label for="email">E-mail</label>
			<input type="email" name="email" id="email" placeholder="Insira seu E-mail" required>
		</div>
		<div class="form-senha">
			<label for="senha">Senha</label>
			<input type="password" name="senha" id="senha" placeholder="Insira sua Senha" required>
		</div>
		<div class="form-enviar">
			<input type="submit" value="Entrar">
		</div>
		<!--<h1>Logue-se</h1>

		<label for="email">E-mail:</label>
		<input type="email" name="email" id="email" required>

		<label for="senha">Senha:</label>
		<input type="password" name="senha" id="senha" required>

		<button name="enviar">Entrar</button> -->

	</form>
<?php include "footer.php"; ?>