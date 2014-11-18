<?php

	class UsuarioDados extends Usuario{

		private $nome;
		private $sobrenome;
		private $nascimento;
		private $endereco;
		private $bairro;
		private $estado;
		private $profissao;
		private $email;
		private $senha;

		function __construct($id, $nome, $sobrenome, $nascimento, $endereco, $bairro, $estado, $profissao, $email, $senha){
			parent::__construct($id, $nome, $email, $senha);
			

			$this->id = $id;
			$this->nome = $nome;
			$this->sobrenome = $sobrenome;
			$this->nascimento = $nascimento;
			$this->endereco = $endereco;
			$this->bairro = $bairro;
			$this->estado = $estado;
			$this->profissao = $profissao;
			$this->email = $email;
			$this->senha = $senha;
		

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