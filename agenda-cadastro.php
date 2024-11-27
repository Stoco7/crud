<?php include "header.php"; ?>

<main>
    <h2>Adicionar nova agenda</h2>
    <form method="post" action="agenda-salvar.php">
        <label>Dia: <input name="dia"></label> <br>
        <label>Horário: <input name="horario"></label> <br>

        <button type="submit">Salvar</button>
    </form>
</main>

<?php include "footer.php"; ?>