<?php
	require "validacao.php";
	include "header.php";
?>
<?php
	echo "ID USUARIO: ".$_SESSION["idusuario"];
?>

<div class="area-pessoal">
	<h1>Área Pessoal</h1>
	<ul>
		<li><a href="formdadospessoais.php">Dados Pessoais</a></li>
		<li><a href="forminserirexperiencia.php">Experiências</a></li>
		<li><a href="deletarconta.php">Excluir Conta</a></li>
		<li><a class="last" href="logout.php">Sair</a></li>
	</ul>
</div>


<?php include "footer.php";?>
