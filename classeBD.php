<?php

class BD{
	private $tipo = "mysql";
	private $host = "localhost";
	private $usuario = "root";
	private $senha = "";
	private $banco = "cv_system";
	private $conexao = null;

	function conexao(){
		try{
			$this->conexao = new PDO($this->tipo.":host=".$this->host.";dbname=".$this->banco, $this->usuario, $this->senha);

			return $this->conexao;

		}catch(PDOException $e){
			echo "Erro: ".$e->getMessage();
		}
	}

	function verificaEmail($email){
	
		$stm = "SELECT email FROM dados WHERE '$email' = email";
		$resultado = mysqli_query($this->conexao, $stm) or die ("Não foi possivel pesquisar o email");

		if( mysqli_num_rows($resultado) ){

			echo "Este email já possui um cadastro.";

			return false;

		} else {

			return true;
		}



	}


	function atualizarDados($nome, $sobrenome, $nascimento, $endereco, $bairro, $estado, $profissao, $email){

		if(verificaEmail($email)){

			$insere = "INSERT INTO dados (nome, sobrenome, nascimento, endereco, bairro, estado, profissao) 
					   VALUES ($nome, $sobrenome, $nascimento, $endereco, $bairro, $estado, $profissao)";

			$resultado = mysqli_query($this->conexao, $insere) or die ("Não foi possivel atualizar os dados");

		} else {

			echo "erro";

		}

			



		




	}

}

?>