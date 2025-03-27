<?php require_once 'cabecalho.php' ?>
<form action="livro2.php" method="GET">
	<h1>Qual livro é maior?</h1>
	<div id ="teste">

	<div id="livros1">
		
		<h2>Livro 1</h2>
		<p>Digite o nome do livro:</p>
		<p><input type="text"name="livro" size="30"maxlenght="100"pattern="[a-zA-ZçÇãÃéÈ\s@_]{3,100}" required></p>
		<p>Digite o nome do autor:</p>
		<p><input type="text"name="autor" size="30"maxlenght="100"pattern="[a-zA-ZçÇãÃéÈ\s@_]{3,100}" required></p>
		<p>Digite a quantidade de páginas:</p>
		<p><input type="number"name="quantidade"step="1"required></p>
	</div>
	<div id="livros2">
		<h2>Livro 2</h2>
		<p>Digite o nome do livro:</p>
		<p><input type="text"name="livro2" size="30"maxlenght="100"pattern="[a-zA-ZçÇãÃéÈ\s@_]{3,100}" required></p>
		<p>Digite o nome do autor:</p>
		<p><input type="text"name="autor2" size="30"maxlenght="100"pattern="[a-zA-ZçÇãÃéÈ\s@_]{3,100}" required></p>
		<p>Digite a quantidade de páginas:</p>
		<p><input type="number"name="quantidade2"step="1"required></p>
	</div>
		
	</div>
	<p><input type="submit"name="botao"value="enviar"></p>
</form>
</body>
</html>