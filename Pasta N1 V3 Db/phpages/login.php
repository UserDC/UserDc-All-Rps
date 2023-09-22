<?php
// Conectando ao banco de dados
include 'conect.php';

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Recebendo dados do formulário
$email = $_POST['email'];
$senha = $_POST['senha'];

// Consulta SQL para verificar as credenciais
$sql = "SELECT * FROM Users WHERE email='$email' AND senha='$senha'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Credenciais corretas, redirecionar para a página de dashboard
    header("Location: ../LogIn/InLogin.html");
} else {
    // Credenciais incorretas, redirecionar de volta para a página de login
    header("Location: ../htmlpages/login.html");
}

$conn->close();
?>
