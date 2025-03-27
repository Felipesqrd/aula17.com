<?php require_once 'cabecalho.php';?>
<section class="conteudo">
<?php
	$valor=$_GET['valor'];
	$quantidade=$_GET['quantidade'];
	$total=$valor*$quantidade;
	$valor = number_format($valor,2,',','.');
	$total = number_format($total,2,',','.');
	echo "<p>Seu produto de $valor R$, mais $quantidade quantidades, resulta em $total R$</p>";
	echo "<p><a href='compra.php' class='link'>Realizar nova compra?</a></p>";
?>	
</section>
</body>
</html>