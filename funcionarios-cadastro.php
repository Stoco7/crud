<?php include "header.php"; ?>

<main>
    <h2>Adicionar novo pfuncionario</h2>
    <form method="post" action="funcionarios-salvar.php">
        <label>Nome: <input name="nome"></label> <br>
        <label>Idade: <input name="idade"></label> <br>
        <label>Telefone: <input name="telefone"></label> <br>
        <label>RF: <input name="rf"></label> <br>

        <button type="submit">Salvar</button>
    </form>
</main>

<?php include "footer.php"; ?>