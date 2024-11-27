<?php include "header.php"; ?>

<main>
    <h2>Adicionar novo cliente</h2>
    <form method="post" action="clientes-salvar.php">
        <label>Nome: <input name="nome"></label> <br>
        <label>Idade: <input name="idade"></label> <br>
        <label>CPF: <input name="cpf"></label> <br>
        <label>Telefone: <input name="telefone"></label> <br>

        <button type="submit">Salvar</button>
    </form>
</main>

<?php include "footer.php"; ?>