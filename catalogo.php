<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}


$sql = "SELECT * FROM carros";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Carros</title>
    <style>
       
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .car {
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 20px;
            padding: 10px;
            overflow: hidden;
            background-color: #f9f9f9;
        }
        .car img {
            float: left;
            margin-right: 10px;
            border-radius: 5px;
        }
        .car h2 {
            margin-top: 0;
            margin-bottom: 5px;
            color: #333;
        }
        .car p {
            color: #666;
            margin-bottom: 5px;
        }
        .car p.tarifa {
            font-weight: bold;
        }
        .alugar-btn {
   
        background-color: #4CAF50;
        color: white;
        border: none;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
        margin-right: 10px; 
    }

        .reserva-btn {

        background-color: #4CAF50;
        color: white;
        border: none;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
    }


    </style>
</head>
<body>

<?php

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<div class="car">';
        echo '<img src="' . $row["imagem_url"] . '" alt="' . $row["marca"] . ' ' . $row["modelo"] . '">';
        echo '<h2>' . $row["marca"] . ' ' . $row["modelo"] . '</h2>';
        echo '<p>' . $row["descricao"] . '</p>';
        echo '<p class="tarifa">Tarifa de aluguel: R$' . number_format($row["preco"], 2, ',', '.') . '/dia</p>';
        echo '<a href="login/alugar.php?id=' . $row["id"] . '" class="alugar-btn">Alugar.</a>';
        echo '<a href="reserva/reserva.php?id=' . $row["id"] . '" class="reserva-btn">Reservar</a>';
        echo '</div>';
    }
} else {
    echo "Nenhum carro encontrado.";
}


$conn->close();
?>

</body>
</html>
