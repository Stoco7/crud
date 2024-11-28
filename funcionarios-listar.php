<?php
include "header.php";
include "conexao.php";

?>
<main>

<h2>Todos os funcionarios</h2>
<a href="funcionarios-cadastro.php">Adicionar novo Funcionario</a>

<table border ="2">
    <tr>
        <th>nome</th>
        <th>idade</th>
        <th>Telefone</th>
        <th>rf</th>
        <th>Ações</th>

    </tr>

<?php

$sql = "select * from funcionarios";
$resultado = mysqli_query($conexao, $sql);

while($linha = mysqli_fetch_assoc($resultado)){
    echo "<tr>";
    echo "<td> {$linha['nome']}</td>";
    echo "<td> {$linha['idade']} </td>";
    echo "<td> {$linha['telefone']} </td>";
    echo "<td> {$linha['rf']} </td>";

    echo "<td>";
    echo "<a href='funcionarios-excluir.php?id={$linha['id']}'>";
    echo "<img src='lixo.png' width='15'>";
    echo "</a>";

    echo "<a href='funcionarios-editar.php?id={$linha['id']}'>";
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