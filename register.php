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
        <form action="register.php" method="POST">
            <input type="text" name="username" placeholder="Nome de usuário" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Senha" required>
            <input type="password" name="confirm_password" placeholder="Confirme a senha" required>
            <button type="submit">Registrar</button>
        </form>
        <p>Já tem uma conta? <a href="login.html">Entre aqui</a></p>
    </div>
</body>
</html>