<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação de Reserva</title>
    <style>

    .reserva-form {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    border-radius: 8px;
    background-color: #f5f5f5;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

    .reserva-form h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

    .reserva-form label {
    display: block;
    margin-bottom: 8px;
    font-size: 16px;
    color: #333;
}

    .reserva-form input[type="date"],
    .reserva-form input[type="text"],
    .reserva-form input[type="email"] {
    width: calc(100% - 20px);
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
    color: #555;
}

    .reserva-form input[type="submit"] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 12px 0;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

    .reserva-form input[type="submit"]:hover {
    background-color: #45a049;
}

    .error-message {
    color: red;
    margin-top: 8px;
}
    .back-to-home button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
}
    .back-to-home button:hover {
            background-color: #45a049;
        }

    </style>
</head>
<body>

<div class="reserva-form">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if (!empty($_POST['data_retirada']) && !empty($_POST['data_devolucao']) && !empty($_POST['nome']) && !empty($_POST['email'])) {
       
            $data_retirada = htmlspecialchars($_POST['data_retirada']);
            $data_devolucao = htmlspecialchars($_POST['data_devolucao']);
            $nome = htmlspecialchars($_POST['nome']);
            $email = htmlspecialchars($_POST['email']);

            
            $numero_referencia = uniqid();

         
            echo "<h2>Reserva Confirmada</h2>";
            echo "<p><strong>Data de Retirada:</strong> $data_retirada</p>";
            echo "<p><strong>Data de Devolução:</strong> $data_devolucao</p>";
            echo "<p><strong>Nome:</strong> $nome</p>";
            echo "<p><strong>Email:</strong> $email</p>";
            echo "<p><strong>Número de Referência:</strong> $numero_referencia</p>";
        } else {
            
            echo "<p class='error-message'>Por favor, preencha todos os campos.</p>";
        }
    } else {
        
        header("Location: reserva.php");
        exit;
    }
    ?>
    <div class="back-to-home">
    <a href="../index.php"><button>Voltar ao Início</button></a>
    </div>
</div>

</body>
</html>
