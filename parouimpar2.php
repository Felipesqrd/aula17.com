<?php require_once 'cabecalho.php' ?>
<section class="conteudo">
	<?php
	$numero = $_GET['numero'];
	if ($numero%2==0) {
		echo "<p>$numero é par!</p>";
	} else {
		echo "<p>$numero é ímpar</p>";
	}
	echo "<p><a href='parouimpar.php' class='link'>Novo Cálculo?</a></p>";
	?>
</section>