<?php
// Função para validar os dados do livro
function validar_livro($livro) {
    // Verifica se os campos obrigatórios estão preenchidos corretamente
    if (
        empty(trim($livro['titulo'])) ||
        empty(trim($livro['autor'])) ||
        !is_numeric($livro['preco']) || $livro['preco'] < 0.01 ||
        !filter_var($livro['quantidade'], FILTER_VALIDATE_INT) || $livro['quantidade'] <= 0
    ) {
        return false;
    }

    return true;
}

// Função para calcular o valor total em estoque
function calcularValorTotalEstoque($livro) {
    return $livro['preco'] * $livro['quantidade'];
}

