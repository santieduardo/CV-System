<?php
	
	if(isset($_POST)){
		include "classes/usuario.php";
		include "classes/usuarioDAO.php";

		$email = $_POST["email"];
		$senha = $_POST["senha"];
		
		$usuario = new Usuario(null, $email, $senha);

		echo "<strong>Dados recebidos</strong><br>". $usuario . "<br>";

		$acoes = new UsuarioDAO();

		if($acoes){
			echo "Conexao OK<br>";
		}

		$acoes->inserir($usuario);
		$acoes->visualizar();
		$acoes->visualizar(2);
	}


?>