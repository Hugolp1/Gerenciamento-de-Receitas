<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receitas - Gerenciamento de Receitas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Lista de Receitas</h1>
        
        <div class="recipe-list">
            <?php
            session_start();
            require_once "banco.php";

            $query = "SELECT cod_receita, nome_receita, descricao FROM receitas WHERE usuario = ?"; 
            $stmt = $banco->prepare($query);
            $stmt->bind_param("s", $_SESSION['username']);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="recipe-item">';
                    echo '<h3>' . $row['nome_receita'] . '</h3>';
                    echo '<p>' . $row['descricao'] . '</p>';
                    echo '<div class="recipe-actions">';
                    echo '<button onclick="location.href=\'recipe-visualiser.php?id=' . $row['cod_receita'] . '\'">Ver ingredientes</button>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo '<p>Nenhuma receita encontrada.</p>';
            }

            $stmt->close();
            ?>
        </div>

        <div class="profile-actions">
            <button onclick="location.href='index.php'">Página Inicial</button>
            <button onclick="location.href='profile.php'">Perfil</button>
        </div>
    </div>
</body>
</html>
