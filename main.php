<?php
require "validacao.php";

echo "Olá muuuuunnndo!";

echo "<br>Bem vindo(a) <br>Seu ID é ".$_SESSION["id"].
		".<br>Você logou em ".$_SESSION["datahora"];

echo "<br><br>";
echo "<a href='logout.php'>Sair</a>";

?>