<?php include "header.php"; ?>

<main>
    <h2>Adicionar novo produto</h2>
    <form method="post" action="produtos-salvar.php">
        <label>Produto: <input name="produto"></label> <br>
        <label>Marca: <input name="marca"></label> <br>
        <label>Função: <input name="funcao"></label> <br>
        <label>Indicação: <input name="indicacao"></label> <br>

        <button type="submit">Salvar</button>
    </form>
</main>

<?php include "footer.php"; ?>