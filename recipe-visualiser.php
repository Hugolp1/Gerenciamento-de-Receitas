<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receita Completa - Gerenciamento de Receitas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Detalhes da Receita</h1>
        <?php
        session_start();
        require_once "banco.php";

        $cod_receita = $_GET['id'];

        $query = "SELECT nome_receita, descricao FROM receitas WHERE cod_receita = ? AND usuario = ?";
        $stmt = $banco->prepare($query);
        $stmt->bind_param("is", $cod_receita, $_SESSION['username']);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo '<h3>' . $row['nome_receita'] . '</h3>';
            echo '<p>' . $row['descricao'] . '</p>';
            
            echo '<h2>Ingredientes</h2>';
            
            $query_ingredientes = "SELECT ingrediente FROM ingredientes WHERE cod_receita = ?";
            $stmt_ingredientes = $banco->prepare($query_ingredientes);
            $stmt_ingredientes->bind_param("i", $cod_receita);
            $stmt_ingredientes->execute();
            $ingredientes_result = $stmt_ingredientes->get_result();
            
            if ($ingredientes_result->num_rows > 0) {
                while ($ingrediente = $ingredientes_result->fetch_assoc()) {
                    echo '<p>- ' . $ingrediente['ingrediente'] . '</p>';
                }
            } else {
                echo '<p>Ingredientes não encontrados.</p>';
            }
        } else {
            echo '<p>Receita não encontrada ou você não tem permissão para acessar esta receita.</p>';
        }

        $stmt->close();
        $stmt_ingredientes->close();
        ?>
        <div class="profile-actions">
            <button onclick="location.href='recipe.php?id=<?php echo $cod_receita; ?>'">Ver receitas</button>
            <button onclick="location.href='profile.php'">Voltar ao Perfil</button>
        </div>
    </div>
</body>
</html>
