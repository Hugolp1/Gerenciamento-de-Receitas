<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil - Gereciamento de Receitas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Perfil do Usuário</h1>
        <?php 
        
            session_start();

            require_once "banco.php";

            if(is_null($_SESSION['username'])){
                header("Location: login.php");
            }

            require "profile-visual.php";
        
        ?>
    </div>
</body>
</html>