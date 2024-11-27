<?php
include "header.php";
include "conexao.php";

?>
<main>

<h2>Todos os Serviços</h2>
<a href="clientes-cadastro.php">Adicionar novo cliente</a>

<table border ="2">
    <tr>
        <th>nome</th>
        <th>idade</th>
        <th>cpf</th>
        <th>telefone</th>
        <th>ações</th>
    </tr>

<?php

$sql = "select * from clientes";
$resultado = mysqli_query($conexao, $sql);

while($linha = mysqli_fetch_assoc($resultado)){
    echo "<tr>";
    echo "<td> {$linha['nome']}</td>";
    echo "<td> {$linha['idade']} </td>";
    echo "<td> {$linha['cpf']} </td>";
    echo "<td> {$linha['telefone']} </td>";

    echo "<td>";
    echo "<a href='clientes-excluir.php?id={$linha['id']}'>";
    echo "<img src='lixo.png' width='15'>";
    echo "</a>";

    echo "<a href='clientes-editar.php?id={$linha['id']}'>";
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