<div class="container">
    <h1>Adicionar Nova Receita</h1>
    <form method="post">
        <label for="nome">Nome da Receita:</label>
        <input type="text" id="nome" name="nome-receita" value="<?php echo htmlspecialchars($nome_receita); ?>" style="width: 92%;" required><br><br>

        <label for="descricao">Descrição:</label>
        <input type="text" id="descricao" name="descricao" value="<?php echo htmlspecialchars($descricao); ?>" style="width: 92%;" required><br><br>

        <label>Ingredientes:</label>
        <div id="ingredients">
            <input type="text" name="ingredients" placeholder="Ingrediente" class="ingredient-input" style="width: 92%;"><br>
        </div>
        <button type="submit" name="add_ingredient">Adicionar Ingrediente</button><br><br>
        <button type="button" onclick="location.href='cancel.php'">Cancelar</button><br><br>
        <button type="submit" name="save_recipe">Salvar receita</button>
    </form>
</div>

<div class="container" style="width: 25%; margin: 0 2vw;">
    <h1>Receita</h1>
    <?php echo "<h3>$nome_receita</h3><br><p>$descricao</p>"; ?>
    <div class="ingredient-list">
        <h2>Ingredientes Adicionados</h2>
        <ul>
            <?php foreach ($_SESSION['ingredients'] as $ingredient): ?>
                <li><?php echo htmlspecialchars($ingredient); ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>