	<footer>
		<div class="navigation">
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
		</div>
		<div class="dev">
			<p>
				Desenvolvimento: Adriano Casarim | Eduardo Santi | Guilherme Silveira
			</p>
		</div>
		<div class="icone">
			<img src="assets/img/iconfooter.jpg" alt="Icone currículo">
		</div>
	</footer>
</body>
</html>