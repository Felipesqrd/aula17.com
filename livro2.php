<?php require_once 'cabecalho.php'; ?>
<section class="conteudo">;
	<?php
	$livro = $_GET['livro'];
	$autor = $_GET['autor'];
	$quantidade = $_GET['quantidade'];
	$livro2 = $_GET['livro2'];
	$autor2 = $_GET['autor2'];
	$quantidade2 = $_GET['quantidade2'];
	if ($quantidade > $quantidade2) {
		echo"<p>$livro do autor $autor tem mais páginas que o $livro2.</p>";
	}else{
		echo"<p>$livro2 do autor $autor2 tem mais páginas que o $livro.</p>";
	}
	?>
</section>