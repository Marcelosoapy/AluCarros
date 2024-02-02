<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!empty($_POST['username']) && !empty($_POST['password'])) {

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bd";

        $conn = new mysqli($servername, $username, $password, $dbname);

    
        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }

      
        $stmt = $conn->prepare("INSERT INTO usuarios (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $password);


        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 

        $_SESSION['online'] = true;


        if ($stmt->execute()) {

            header("Location: login.php");
            exit();
        } else {

            echo "Erro ao criar conta: " . $conn->error;
        }

     
        $stmt->close();
        $conn->close();
    } else {
        
        $create_account_error = "Por favor, preencha todos os campos.";
    }
} else {
    
    header("Location: criar_conta.php");
    exit();
}
?>
