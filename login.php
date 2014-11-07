<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro de Usuário</title>
</head>
<body>
	<form action="autenticar.php" method="post">
		<h1>Logue-se</h1>

		<label for="email">E-mail:</label>
		<input type="email" name="email" id="email" required>

		<label for="senha">Senha:</label>
		<input type="password" name="senha" id="senha" required>

		<button name="enviar">Entrar</button>

	</form>
</body>
</html>