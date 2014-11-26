<?php

	include "usuario.php";
	include "usuarioDados.php";

	$usuario1 = new Usuario("0009", "Eduardo", "emaildoedu@duduzin.net", "1994-03-22");
	
	$usuario2 = new Usuario();

	$usuario3 = new UsuarioDados("0006", "calofidãti", "gritao@maluco.doido", "5555-33-22", "5555-5555", "Meu pai não compartilha dessa ideia, 00");

	echo $usuario1."<br>";
	echo $usuario2."<br>";
	echo $usuario3."<br>";

?>