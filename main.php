<?php
	require "validacao.php";
	include "header.php";
?>

<div class="logout">
	<a href="logout.php">Sair</a>
</div>

<?php
	echo "ID USUARIO: ".$_SESSION["idusuario"];
?>

<h1>Área Pessoal</h1>

<div class="area-pessoal">
	<a href="formdadospessoais.php">Dados</a>
	<a href="forminserirexperiencia.php">Experiências</a>
	<a href="deletarconta.php">Deletar Conta</a>
</div>

<?php include "footer.php";?>
