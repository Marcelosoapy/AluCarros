<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === "usuario" && $password === "senha") {
        header("Location: confirmacao_aluguel.php");
        exit;
    } else {
        header("Location: alugar.php?error=1");
        exit;
    }
} else {
    header("Location: alugar.php");
    exit;
}
?>
