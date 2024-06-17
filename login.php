<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Gereciamento de Receitas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Login</h1>

        <?php 
        
        require_once "banco.php";
        
        require "form-login.php";

        $usuario = $_POST['username'] ?? null;
        $senha = $_POST['password'] ?? null;

        $sucesso = false;

        if($sucesso == true){
            sleep(2);
            header("Location: profile.html");
        }

        ?>
    </div>
</body>
</html>