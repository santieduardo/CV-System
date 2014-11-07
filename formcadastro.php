<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro de Usuário</title>
</head>
<body>
	<form action="cadastrar.php" method="post">
		<h1>Cadastre-se</h1>
		
		<label for="nome">Nome:</label>
		<input type="text" name="nome" id="nome" required>
		
		<label for="senha">Senha:</label>
		<input type="password" name="senha" id="senha" required>
		
		<label for="email">E-mail:</label>
		<input type="email" name="email" id="email" required>

		<button name="enviar">Enviar</button>


	</form>
</body>
</html>