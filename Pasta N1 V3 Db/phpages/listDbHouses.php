<!DOCTYPE html>
<html>
<head>
    <title>Lista de Dados</title>
    <link rel="stylesheet" href="../Css/Index.css">
</head>
<body>
    <h1>Lista de Dados</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Owner</th>
            <th>Price</th>
        </tr>

        <?php
        // Inclua o arquivo de configuração do banco de dados
        include 'conect.php';

        // Consulta SQL para buscar os dados
        $sql = "SELECT id, Owner, Price FROM houses";

        // Executa a consulta
        $result = $conn->query($sql);

        // Verifica se existem dados
        if ($result->num_rows > 0) {
            // Loop para exibir os dados
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["Owner"] . "</td>";
                echo "<td>" . $row["Price"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "Nenhum dado encontrado.";
        }

        // Fecha a conexão com o banco de dados
        $conn->close();
        ?>
    </table>

    <style>
        h1,p,h2,label,td,tr{
            color: aliceblue;
        }
        input{
        color: rgb(255, 255, 255);
        background-color: black;
        }   
    </style>

</body>
</html>
