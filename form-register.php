<form action="register.php" method="POST">
    <input type="text" name="username" placeholder="Nome de usuário" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Senha" required>
    <input type="password" name="confirm_password" placeholder="Confirme a senha" required>
    <button type="submit" onsubmit="location.href='login.php'">Registrar</button>
</form>
<p>Já tem uma conta? <a href="login.php">Entre aqui</a></p>