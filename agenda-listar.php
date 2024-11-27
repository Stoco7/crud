<?php
include "header.php";
include "conexao.php";

?>
<main>

<h2>Todos os Serviços</h2>
<a href="agenda-cadastro.php">Adicionar novo serviço</a>

<table border ="2">
    <tr>
        <th>Dia</th>
        <th>Horario</th>
        <th>Ações</th>
    </tr>

<?php

$sql = "select * from agenda";
$resultado = mysqli_query($conexao, $sql);

while($linha = mysqli_fetch_assoc($resultado)){
    echo "<tr>";
    echo "<td> {$linha['dia']}</td>";
    echo "<td> {$linha['horario']} </td>";

    echo "<td>";
    echo "<a href='agenda-excluir.php?id={$linha['id']}'>";
    echo "<img src='lixo.png' width='15'>";
    echo "</a>";

    echo "<a href='agenda-editar.php?id={$linha['id']}'>";
    echo "<img src='edit.png' width='15'>";
    echo "</a>";
    echo "</td>";

    echo "</tr>";
}

mysqli_close($conexao);

// echo "<br>";
// echo "<pre>";
// print_r($resultado);
// echo "</pre>";

?>
</table>
</main>
<?php include "footer.php"; ?>