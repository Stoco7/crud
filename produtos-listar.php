<?php
include "header.php";
include "conexao.php";

?>
<main>

<h2>Todos os Produtos</h2>
<a href="produtos-cadastro.php">Adicionar novo Produto</a>

<table border ="2">
    <tr>
        <th>Produto</th>
        <th>Marca</th>
        <th>Função</th>
        <th>Indicação</th>
        <th>Ações</th>

    </tr>

<?php

$sql = "select * from produtos";
$resultado = mysqli_query($conexao, $sql);

while($linha = mysqli_fetch_assoc($resultado)){
    echo "<tr>";
    echo "<td> {$linha['produto']}</td>";
    echo "<td> {$linha['marca']} </td>";
    echo "<td> {$linha['funcao']} </td>";
    echo "<td> {$linha['indicacao']} </td>";

    echo "<td>";
    echo "<a href='produtos-excluir.php?id={$linha['id']}'>";
    echo "<img src='lixo.png' width='15'>";
    echo "</a>";

    echo "<a href='produtos-editar.php?id={$linha['id']}'>";
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