<?php
class UsuarioDados extends Usuario{
private $nome;
private $sobrenome;
private $nascimento;
private $endereco;
private $bairro;
private $cidade;
private $estado;
private $profissao;
private $cargo;
private $inicio;
private $termino;
private $atividades;
function __construct($id, $nome, $sobrenome, $nascimento, $endereco, $bairro, $cidade, $estado, $profissao, $cargo, $inicio, $termino, $atividades){
parent::__construct($id, null, null);
$this->id = $id;
$this->nome = $nome;
$this->sobrenome = $sobrenome;
$this->nascimento = $nascimento;
$this->endereco = $endereco;
$this->bairro = $bairro;
$this->cidade = $cidade;
$this->estado = $estado;
$this->profissao = $profissao;
$this->cargo = $cargo;
$this->inicio = $inicio;
$this->termino = $termino;
$this->atividades = $atividades;
}
function __set($prop, $valor){
$this->$prop = $valor;
}
function __get($prop){
return $this->$prop;
}

}
?>