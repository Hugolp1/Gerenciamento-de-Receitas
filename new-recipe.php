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
        
    session_start();

    require_once "banco.php";

    $nome_receita = $_POST['nome-receita'] ?? null;
    $descricao = $_POST['descricao'] ?? null;
    $ingrediente = $_POST['ingredients'] ?? null;

    if (!isset($_SESSION['ingredients'])) {
        $_SESSION['ingredients'] = [];
    }

    if (isset($_POST['add_ingredient'])) {
        if (!is_null($ingrediente)) {
            $_SESSION['ingredients'][] = $ingrediente;
        }
    }

    if (isset($_POST['save_recipe'])) {
        if (!isset($_SESSION['username'])) {
            echo "Você precisa estar logado para adicionar uma nova receita.";
            exit();
        }

        $usuario = $_SESSION['username'];

        if (!is_null($nome_receita) && !is_null($descricao) && !empty($_SESSION['ingredients'])) {
            $q = "INSERT INTO receitas (nome_receita, descricao, usuario) VALUES ('$nome_receita', '$descricao', '$usuario')";
            $banco->query($q);
            
            $cod_receita = $banco->insert_id;
            
            foreach ($_SESSION['ingredients'] as $ingrediente) {
                $q = "INSERT INTO ingredientes (cod_receita, ingrediente) VALUES ('$cod_receita', '$ingrediente')";
                $banco->query($q);
            }
            
            $_SESSION['ingredients'] = [];
            
            header("Location: profile.php");
            exit();
        }
    }

    require "form-new-recipe.php";
    ?>

</body>
</html>
