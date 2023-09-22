<?php
// Conectando ao banco de dados

include 'conect.php';

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $Owner = $_POST["Owner"];
    $Price = $_POST["Price"];
    
    /* 
    $nomeArquivo = $_FILES["arquivo"]["name"];
    $tmpNomeArquivo = $_FILES["arquivo"]["tmp_name"];
 */

    // Move o arquivo para o diretório desejado (por exemplo, 'uploads/')
    
    
/*
     $diretorioDestino = 'uploads/';
    move_uploaded_file($tmpNomeArquivo, $diretorioDestino . $nomeArquivo);
 */

    if ($conn->connect_error) {
        die("Erro na conexão com a base de dados: " . $conn->connect_error);
    }

    $sql = "INSERT INTO houses (Owner, Price) VALUES ($Owner, $Price)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $Owner, $Price);

    if ($stmt->execute()) {
        echo "Arquivo enviado e dados inseridos com sucesso na base de dados.";
    } else {
        echo "Erro ao inserir dados na base de dados: " . $conn->error;
    }

    // Feche a conexão com a base de dados
    $stmt->close();
    $conn->close();
}
?>
