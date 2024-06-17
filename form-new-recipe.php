<div class="container">
    <?php ?>
    <h1>Adicionar Nova Receita</h1>
    <form method="post">
        <label for="nome">Nome da Receita:</label>
        <input type="text" id="nome" name="nome-receita" style="width: 92%;" required><br><br>

        <label for="descricao">Descrição:</label>
        <input type="text" id="descricao" name="descricao" style="width: 92%;" required><br><br>

        <label>Ingredientes:</label>
        <div id="ingredients">
            <input type="text" name="ingredients[]" placeholder="Ingrediente" class="ingredient-input" style="width: 92%;" required><br>
        </div>
        <button type="submit">Adicionar Ingrediente</button><br><br>
        <button type="submit">Salvar receita</buttontype>
    </form>
</div>
<div class="container" style="width: 25%; margin: 0 2vw;">
    <h1>Receita</h1>
    <?php echo"<h3>$nome_receita</h3><br><p>$descricao</p>"?>
</div>