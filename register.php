<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Gereciamento de Receitas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Cadastro</h1>
        <?php 
        
            require_once "banco.php";
            
            require "form-register.php";
            
            $usuario = $_POST['username'] ?? null;
            $email = $_POST['email'] ?? null;
            $senha = $_POST['password'] ?? null;
            $confirm_sen = $_POST['confirm_password'] ?? null;

            $sucesso = false;
            
            if(is_null($usuario) || is_null($email) || is_null($senha)){
            } else if($senha != $confirm_sen){
                echo '<p>As senhas precisam ser iguais</p>';
            } else{
                criarUsuario($usuario, $email, $senha);
                echo "<p>Usuario criado com sucesso!</p>";
                $sucesso = true;
            }

            if($sucesso == true){
                sleep(2);
                header("Location: login.php");
            }

        ?>
    </div>
</body>
</html>