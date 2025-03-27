<?php require_once 'cabecalho.php' ?>
<form action="SENAC2.php"method="GET">
	<h1>Digite a instituição de ensino</h1>
	<p><input type="text"name="text" size="50"maxlenght="100"pattern="[a-zA-ZçÇãÃéÈ\s@_]{3,100}" required></p>
	<p><input type="submit"name="botao"value="enviar"></p>
</form>