<?php

class BD{
	$tipo = "mysql";
	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "ppi1";
	$conexao = null;

	function conexao(){
		try{
			$this->conexao = new PDO($this->tipo.":host=".$this->host.";dbname=";$this->banco, $this->usuario, $this->senha);

			return $this->conexao;

		}catch(PDOException $e){
			echo "Erro: ".$e->getMessage();
		}
	}

}

?>