<?php

	class UsuarioDados extends Usuario{

		private $tel;
		private $end;

		function __construct($id, $nome, $email, $senha, $tel, $end){
			parent::__construct($id, $nome, $email, $senha);
			$this->tel = $tel;
			$this->end = $end;
		}


		function __toString() {
			return "O usuario de ID: <strong>".$this->id."</strong><br>".
					" se chama <strong>".$this->nome."</strong><br>".
					" com e-mail <strong>".$this->email."</strong><br>".
					" e senha <strong>".$this->senha."</strong><br>".
					" telefone <strong>".$this->tel."</strong><br>".
					" endereço <strong>".$this->end."</strong><br>";
		}

	}
?>