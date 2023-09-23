<?php

include 'conect.php';


// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $owner = $_POST["Owner"];
    $price = $_POST["Price"];
    
    // Prepara uma instrução SQL para a inserção
    $sql = "INSERT INTO houses (Owner, Price) VALUES (?, ?)";
    
    // Prepara a instrução SQL usando uma declaração preparada para evitar injeção de SQL
    $stmt = $conn->prepare($sql);
    
    // Vincula os parâmetros à declaração preparada
    $stmt->bind_param("si",$owner, $price);
    
    // Executa a instrução SQL
    if ($stmt->execute()) {
        echo "Dados inseridos com sucesso na tabela houses.";
    } else {
        echo "Erro ao inserir dados na tabela houses: " . $stmt->error;
    }
    
    // Fecha a declaração preparada
    $stmt->close();
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
