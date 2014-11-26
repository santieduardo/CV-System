﻿<?php

class UsuarioDAO extends BD {

	public function __construct(){
		$this->conexao = BD::conexao();
	}

	public function inserir($usuario){
		try{

			$stm = $this->conexao->prepare("SELECT email FROM usuarios
											WHERE email = ?");
			$stm->bindValue(1, $usuario->email);
			$verifica = $stm->execute();

			if($stm->rowCount() > 0){
				echo "E-mail já cadastrado!";
			}else{
				$stm = $this->conexao->prepare("INSERT INTO usuarios (email, senha) VALUES (?, ?)");

				$stm->bindValue(1, $usuario->email);
				$stm->bindValue(2, $usuario->senha);

				$stm->execute();

				echo "Último ID inserido: ".$this->conexao->lastInsertId()."<br>";

				echo "Dados inseridos<br>";
			}

		}catch(PDOException $e){
			echo "Erro: ".$e->getMessage();
		}
	}


	public function atualizarDados($usuario){

		echo $usuario;

		try{
			
			$this->conexao->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );												
			$stm = $this->conexao->prepare("INSERT INTO dados ( id, nome, sobrenome, nascimento, endereco, bairro, cidade, estado, profissao )
											VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

			/*$stm = $this->conexao->prepare("UPDATE dados SET id = ?, nome = ?, sobrenome = ?,
												   	nascimento = ?, endereco = ?, bairro = ?, 
													estado = ?, profissao = ?");
			*/

			echo "NOMEEEEEEEEEEEEE ".$usuario->nome;

			$stm->bindValue(1, $usuario->id);
			$stm->bindValue(2, $usuario->nome);
			$stm->bindValue(3, $usuario->sobrenome);
			$stm->bindValue(4, $usuario->nascimento);
			$stm->bindValue(5, $usuario->endereco);
			$stm->bindValue(6, $usuario->bairro);
			$stm->bindValue(7, $usuario->cidade);
			$stm->bindValue(8, $usuario->estado);
			$stm->bindValue(9, $usuario->profissao);

			$stm->execute();

			print_r($this->conexao->errorInfo());

		}catch(PDOException $e){

			echo "Erro: " . $e->getMessage();

		}
	}

	public function visualizar($id = ""){
		try{
			if($id == ""){
				$stm = $this->conexao->prepare("SELECT * FROM usuarios");
			}else{
				$stm = $this->conexao->prepare("SELECT * FROM usuarios 
												WHERE id = ?");
				$stm->bindValue(1, $id);
			}

			$query = $stm->execute();

			if($query){
				while ($dados = $stm->fetch(PDO::FETCH_OBJ)) {
					echo "<br>Busca de dados cadastrados<br>";
					echo "<strong>ID:</strong> ".$dados->id."<br>";
					echo "<strong>E-mail:</strong> ".$dados->email."<br>";
					echo "<strong>Senha:</strong> ".$dados->senha."<br>";
					echo "======================================";
				}
			}

		}catch(PDOException $e){
			echo "Erro: ".$e->getMessage();
		}
	}

	public function autenticar($usuario){
		try{
			$stm = $this->conexao->prepare("SELECT * FROM usuarios
											WHERE email = ? AND senha = ?");
			$stm->bindValue(1, $usuario->email);
			$stm->bindValue(2, $usuario->senha);

			$stm->execute();

			if($stm->rowCount() == 0){
				return null;
			}else{
				$dados = $stm->fetch(PDO::FETCH_OBJ);
				return $dados->id;
			}



		}catch(PDOException $e){
			echo "Erro: ".$e->getMessage();
		}
	}

}


?>