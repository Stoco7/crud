<?php

$servico = $_POST["servico"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$categoria = $_POST["categoria"];

$sql = "insert into servicos(servico, descricao, preco, categoria)
values('$servico', '$descricao', '$preco', '$categoria')";
echo $sql;

include "conexao.php";

$resultado = mysqli_query($conexao, $sql);

mysqli_close($conexao);

header("location: servicos-listar.php");

?>