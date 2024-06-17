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

        session_start();

        require_once "banco.php";
        
        require "form-login.php";

        $usuario = $_POST['username'] ?? null;
        $senha = $_POST['password'] ?? null;

        $sucesso = false;

        if(is_null($usuario) || is_null($senha)){
        } else{
            
            $q = "SELECT usuario, email, senha FROM usuarios 
            WHERE usuario='$usuario'";

            $busca = $banco->query($q);


            if($busca->num_rows > 0){
                
                $usu = $busca->fetch_object();

                if($senha == $usu->senha){
                    echo '<p>Login bem sucedido!</p>';
                    $_SESSION['useremail'] = $usu->email;
                    $_SESSION['username'] = $usu->usuario;
                    $sucesso = true;
                } else {
                    echo '<p>Senha incorreta. Tente novamente.</p>';
                }

            } else {
                echo "<p>Usuário não encontrado. Tente novamente.</p>";
            }
        }

        if($sucesso){
            sleep(2);
            header("Location: profile.php");
            exit();
        }

        ?>
    </div>
</body>
</html>