<?php
include "header.php";
include "conexao.php";

?>
<main>

<h2>Todos os Serviços</h2>
<a href="Servicos-cadastro.php">Adicionar novo serviço</a>

<table border ="2">
    <tr>
        <th>Serviço</th>
        <th>Descrição</th>
        <th>Preço</th>
        <th>Categoria</th>
        <th>Ações</th>

    </tr>

<?php

$sql = "select * from servicos";
$resultado = mysqli_query($conexao, $sql);

while($linha = mysqli_fetch_assoc($resultado)){
    echo "<tr>";
    echo "<td> {$linha['servico']}</td>";
    echo "<td> {$linha['descricao']} </td>";
    echo "<td> {$linha['preco']} </td>";
    echo "<td> {$linha['categoria']} </td>";

    echo "<td>";
    echo "<a href='servicos-excluir.php?id={$linha['id']}'>";
    echo "<img src='lixo.png' width='15'>";
    echo "</a>";

    echo "<a href='servicos-editar.php?id={$linha['id']}'>";
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
