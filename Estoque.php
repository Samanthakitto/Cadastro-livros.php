<?php
// Inclui as funções de validação
require_once 'validacoes.php';

// Verifica se o método de envio é POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // Cria um array associativo com os dados do livro
    $livro = [
        'titulo' => $_POST['titulo'] ?? '',
        'autor' => $_POST['autor'] ?? '',
        'preco' => floatval($_POST['preco'] ?? 0),
        'quantidade' => intval($_POST['quantidade'] ?? 0),
    ];

    // Valida os dados usando a função
    if (!validar_livro($livro)) {
        echo "<h2>Erro nos dados fornecidos!</h2>";
        echo "<p>Verifique se todos os campos foram preenchidos corretamente.</p>";
        echo "<a href='index.php'>Voltar</a>";
        exit;
    }

    // Calcula o valor total do estoque
    $valorTotal = calcularValorTotalEstoque($livro);

    // Exibe os dados do livro
    echo "<h1>Livro Cadastrado com Sucesso!</h1>";
    echo "<p><strong>Título:</strong> " . htmlspecialchars($livro['titulo']) . "</p>";
    echo "<p><strong>Autor:</strong> " . htmlspecialchars($livro['autor']) . "</p>";
    echo "<p><strong>Preço Unitário:</strong> R$ " . number_format($livro['preco'], 2, ',', '.') . "</p>";
    echo "<p><strong>Quantidade:</strong> " . $livro['quantidade'] . "</p>";
    echo "<p><strong>Valor Total em Estoque:</strong> R$ " . number_format($valorTotal, 2, ',', '.') . "</p>";
    echo "<a href='index.php'>Cadastrar novo livro</a>";
} else {
    // Caso o acesso não seja via POST
    header("Location: index.php");
    exit;
}
