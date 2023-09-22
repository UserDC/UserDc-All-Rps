<?php
$conn = new mysqli("localhost", "root", "", "ElineDb");

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

?>
