<?php require_once 'cabecalho.php'; ?>
<section class="conteudo">
	<?php 
	$text = $_GET['text'];
	if($text == "SENAC"){
		echo "<p>Sua instituição é o SENAC!</p>";
	}else{
		echo"<p>Sua instituição não é o SENAC</p>";
	}
	echo "<p><a href='SENAC.php' class='link'>Voltar?</a></p>";

	?>
</section>