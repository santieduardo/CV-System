<?php
	require "validacao.php";
	include "classes/usuario.php";
	include "classes/usuarioDados.php";
	include "classes/usuarioDAO.php";
	include "header.php";
?>


<div class="area-pessoal">
	<br/>
	<h1>Área Pessoal</h1>
	<ul>
		<li><a href="formdadospessoais.php">Dados Pessoais</a></li>
		<li><a href="forminserirexperiencia.php">Experiências</a></li>
		<li><a href="deletarconta.php">Excluir Conta</a></li>
		<li><a class="last" href="logout.php">Sair</a></li>
	</ul>
</div>


<?php include "footer.php";?>
