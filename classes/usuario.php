<?php

class Usuario{
	
	private $id;
	private $nome;
	protected $email;
	private $senha;

	function __construct($id="", $nome="", $email="", $senha="5555"){
		$this->id = $id;
		$this->nome = $nome;
		$this->email = $email;
		$this->senha = md5($senha);
	}

	function __set($prop, $valor){
		$this->$prop = $valor;
		
	}
	
	function __get($prop){
		return $this->$prop;
	}

	function __toString() {
		return "O usuario de ID: <strong>".$this->id."</strong><br>".
				" se chama <strong>".$this->nome."</strong><br>".
				" com e-mail <strong>".$this->email."</strong><br>".
				" e senha <strong>".$this->senha."</strong><br>";
	}

}

?>