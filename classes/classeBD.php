<?php

class BD{
	private $tipo = "mysql";
	private $host = "localhost";
	private $usuario = "u127873775_root";
	private $senha = "cv-system";
	private $banco = "u127873775_cvsys";
	private $conexao = null;

	function conexao(){
		try{
			$this->conexao = new PDO($this->tipo.":host=".$this->host.";dbname=".$this->banco, $this->usuario, $this->senha);

			return $this->conexao;

		}catch(PDOException $e){
			echo "Erro: ".$e->getMessage();
		}
	}

}

?>