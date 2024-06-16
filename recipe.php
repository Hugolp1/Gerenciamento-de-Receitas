<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receitas - Gerenciamento de Receitas</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="recipe.css">
</head>
<body>
    <div class="container">
        <h1>Gerenciamento de Receitas</h1>
        
        <div class="recipe-list">
            <h2>Lista de Receitas</h2>

            <div class="recipe-item">
                <h3>Nome da Receita 1</h3>
                <p>Descrição breve da receita 1.</p>
                <div class="recipe-actions">
                    <button>Ver Receita</button>
                </div>
            </div>

            <div class="recipe-item">
                <h3>Nome da Receita 2</h3>
                <p>Descrição breve da receita 2.</p>
                <div class="recipe-actions">
                    <button>Ver Receita</button>
                </div>
            </div>

            <!-- Adicione mais itens de receita conforme necessário -->

        </div>

        <div class="profile-actions">
            <button onclick="location.href='index.php'">Página Inicial</button>
            <button onclick="location.href='profile.php'">Perfil</button>
            <button onclick="location.href='logout.php'">Logout</button>
        </div>
    </div>
</body>
</html>
