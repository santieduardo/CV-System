<!DOCTYPE html>
<html>
<head>
	<title>CV System - Seu Currículo Online</title>
	<link rel="stylesheet" type="text/css" href="assets/css/reset.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	<meta charset="utf-8">
	<link rel="stylesheet" href="bjqs.css">

    <!-- some pretty fonts for this demo page - not required for the slider -->
    <link  rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Source+Code+Pro%7COpen+Sans:300"> 

    <!-- demo.css contains additional styles used to set up this demo page - not required for the slider --> 
    <link rel="stylesheet" href="demo.css">

    <!-- load jQuery and the plugin -->
    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="js/bjqs-1.3.min.js"></script>

</head>
<body>
	<header>
		<div class="logo"></div>
		<nav>
			
			<ul>
				<?php if(!isset($_SESSION["id"])){
					echo "<li><a href='index.php'>Início</a></li>
					<li><a href='main.php'>Gerencie seu Currículo</a></li>
					<li><a href='formcadastro.php'>Cadastre-se</a></li>
					<li><a href='login.php' class='last'>Login</a></li>";
				}
				else {

					echo "<li><a href='main.php'>Área Pessoal</a></li>
					<li><a href='formdadospessoais.php'>Dados Pessoais</a></li>
					<li><a href='forminserirexperiencia.php'>Experiencias</a></li>
					<li><a href='logout.php' class='last'>Sair</a></li>";

				}
				?>
			</ul>
		</nav>
	</header>