<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Receita - Gerenciamento de Receitas</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <?php 
        
        require_once "banco.php";
        
        $nome_receita = '';

        $nome_receita = $_POST['nome-receita'] ?? null;
        $descricao = $_POST['descricao'] ?? null;
        $ingrediente = $_POST['ingredients[]'] ?? null;

        require "form-new-recipe.php";
        
    ?>

</body>
</html>
