<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Livro</title>
</head>
<body>
    <h1>Cadastro de Livro</h1>
    <form action="estoque.php" method="POST">
        <label for="titulo">Título:</label><br>
        <input type="text" name="titulo" id="titulo" required><br><br>

        <label for="autor">Autor:</label><br>
        <input type="text" name="autor" id="autor" required><br><br>

        <label for="preco">Preço unitário (R$):</label><br>
        <input type="number" step="0.01" min="0.01" name="preco" id="preco" required><br><br>

        <label for="quantidade">Quantidade em estoque:</label><br>
        <input type="number" name="quantidade" id="quantidade" min="1" required><br><br>

        <input type="submit" value="Cadastrar Livro">
    </form>
</body>
</html>
