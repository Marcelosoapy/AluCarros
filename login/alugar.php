<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['id'])) {
    // O usuário não está logado, redireciona para a página de login
    header("Location: login.php?redirect=alugar.php");
    exit();
}

// Verifica se há detalhes do aluguel na sessão
if (isset($_SESSION['aluguel'])) {
    // Mostra a confirmação e o comprovante de aluguel
    $aluguel = $_SESSION['aluguel'];
    // Exibir mensagem de confirmação
    echo "<p>Seu aluguel foi confirmado.</p>";
    // Exibir detalhes do aluguel
    echo "<p>Detalhes do Aluguel:</p>";
    // Exibir detalhes do aluguel, como datas, carro alugado, etc.
} else {
    // Não há detalhes de aluguel na sessão, redireciona de volta para o catálogo de carros ou página inicial
    header("Location: index.php");
    exit();
}
?>
