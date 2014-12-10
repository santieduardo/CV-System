<?php
session_start();
session_destroy();

include "header.php";
echo "<div class='area-pessoal'><h1 class='aviso-default'>Você saiu da sua conta pessoal</h1></div>";
header("refresh:3; url=index.php");
include "footer.php";
?>