<?php require_once 'cabecalho.php'; ?>
<form action="compra2.php" method="GET">
	<h1>Compras</h1>
	<p>digite o valor:</p>
	<p><input type="number" step="0.01" name="valor"required></p>
	<p>digite a quantidade:</p>
	<p><input type="number" step="1" name="quantidade"min="1" max="99" required></p>
	<p><input type="submit" name="botao" value="Total"></p>
</form>
</body>
</html>