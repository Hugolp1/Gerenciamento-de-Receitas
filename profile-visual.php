<div class="profile-info">
    <p><strong>Nome de usuário:</strong> <?php echo $_SESSION['username']; ?></p>
    <p><strong>Email:</strong> <?php echo $_SESSION['useremail']; ?>
</div>

<div class="profile-actions">
    <button onclick="location.href='index.php'">Página Inicial</button>
    <button onclick="location.href='new-recipe.php'">Nova Receita</button>
    <button onclick="location.href='logout.php'">Logout</button>
</div>