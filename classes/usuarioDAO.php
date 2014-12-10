<?php
	include "classeBD.php";
	class UsuarioDAO extends BD {

		public function __construct(){
			$this->conexao = BD::conexao();
		}
		public function inserir($usuario){
			try{
				$stm = $this->conexao->prepare("SELECT email 
												FROM usuarios 
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
				$stm = $this->conexao->prepare("SELECT id 
												FROM dados 
												WHERE id=?");

				$stm->bindValue(1, $usuario->id);
				$stm->execute();
				if($stm->rowCount() > 0){
					$stm = $this->conexao->prepare("UPDATE dados 
													SET nome = ?, 
													sobrenome = ?,
													nascimento = ?, 
													endereco = ?, 
													bairro = ?,
													cidade = ?,
													estado = ?, 
													profissao = ?
													WHERE id = ?");
					
					$stm->bindValue(1, $usuario->nome);
					$stm->bindValue(2, $usuario->sobrenome);
					$stm->bindValue(3, $usuario->nascimento);
					$stm->bindValue(4, $usuario->endereco);
					$stm->bindValue(5, $usuario->bairro);
					$stm->bindValue(6, $usuario->cidade);
					$stm->bindValue(7, $usuario->estado);
					$stm->bindValue(8, $usuario->profissao);
					$stm->bindValue(9, $usuario->id);
					$stm->execute();
					
					header("Location: formdadospessoais.php");
					
				} else {
					$this->conexao->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
					$stm = $this->conexao->prepare("INSERT INTO dados ( id, nome, sobrenome, nascimento, endereco,
													bairro, cidade, estado, profissao )	VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
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
					
					header("Location: formdadospessoais.php");
				}
			}catch(PDOException $e){
				echo "Erro: " . $e->getMessage();
			}
		}
		public function atualizarExperiencias($usuario){
			try{
				$stm = $this->conexao->prepare("SELECT * FROM experiencias WHERE usuario = ?");

				$stm->bindValue(1, $usuario->id);
				$stm->execute();
				
				if($stm->rowCount() > 0){
					$stm = $this->conexao->prepare("UPDATE experiencias SET cargo = ?, inicio = ?, 
													termino = ?, atividades = ? WHERE usuario = ?");
					$stm->bindValue(1, $usuario->cargo);
					$stm->bindValue(2, $usuario->inicio);
					$stm->bindValue(3, $usuario->termino);
					$stm->bindValue(4, $usuario->atividades);
					$stm->bindValue(5, $usuario->id);
					$stm->execute();
					
					header("Location: forminserirexperiencia.php");

				}else{
					
					$stm = $this->conexao->prepare("INSERT INTO experiencias (usuario, cargo, inicio, termino, atividades) 
													VALUES (?,?,?,?,?)");
					$stm->bindValue(1, $usuario->id);
					$stm->bindValue(2, $usuario->cargo);
					$stm->bindValue(3, $usuario->inicio);
					$stm->bindValue(4, $usuario->termino);
					$stm->bindValue(5, $usuario->atividades);
					$stm->execute();
					
					
					header("Location: forminserirexperiencia.php");
				}
			}catch(PDOException $e){
				echo "Erro: " . $e->getMessage();
			}
		}

		public function retornarExperiencias($usuario){
			try{
				$stm = $this->conexao->prepare("SELECT * FROM experiencias WHERE usuario = ?");

				$stm->bindValue(1, $usuario);
				$stm->execute();
				
				if($stm->rowCount() > 0){

					$stm = $this->conexao->prepare("SELECT * 
													FROM experiencias 
													WHERE usuario=?");

					$stm->bindValue(1, $usuario);
					$stm->execute();

					if($stm->rowCount() == 0) {
						return null;
					} else {
						$dados = $stm->fetch(PDO::FETCH_OBJ);
						return $dados;
					}
				}else{

				}
			}catch(PDOException $e){
				echo "Erro: " . $e->getMessage();
			}

		}

		public function deletarConta($usuario){
			try{
				$stm = $this->conexao->prepare("SELECT senha FROM usuarios WHERE id = ?");
				$stm->bindValue(1, $usuario->id);
				$stm->execute();
				
				$retorno = $stm->fetch(PDO::FETCH_OBJ);
				
				if($stm->rowCount() > 0){

					if($retorno->senha == $usuario->senha){
						$stm = $this->conexao->prepare("DELETE FROM usuarios WHERE id = ?");
						$stm->bindValue(1, $usuario->id);
						$stm->execute();
					}else{
						echo "Senha Incorreta";
						header("refresh:3; url=deletarconta.php");
					}
				}
			}catch(PDOException $e){
				echo "Erro: ".$e->getMessage();
			}
		}

		public function retornarDados($usuario){
			try{
				$stm = $this->conexao->prepare("SELECT * 
												FROM dados 
												WHERE id=?");

				$stm->bindValue(1, $usuario);
				$stm->execute();

				if($stm->rowCount() == 0) {
					return null;
				} else {
					$dados = $stm->fetch(PDO::FETCH_OBJ);
					return $dados;
				}
			}catch(PDOException $e){
				echo "Erro: " . $e->getMessage();
			}

		}
		

		public function retonarID() {
			try {
				echo $_SESSION["idusuario"];
			} catch(PDOException $e) {
				echo "Erro: ".$e->getMessage();
			}
		}	

		public function visualizar($id = ""){
			try{
				if($id == ""){
					$stm = $this->conexao->prepare("SELECT * 
													FROM usuarios");
				}else{
					$stm = $this->conexao->prepare("SELECT * 
													FROM usuarios
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
				$stm = $this->conexao->prepare("SELECT * FROM usuarios WHERE email = ? AND senha = ?");
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