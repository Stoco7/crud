<?php

$produto = $_POST['produto'];
$marca = $_POST['marca'];
$funcao = $_POST['funcao'];
$indicacao = $_POST['indicacao'];

$sql = "insert into produtos(produto, marca, funcao, indicacao)
values('$produto', '$marca', '$funcao', '$indicacao')";
echo $sql;

include "conexao.php";

$resultado = mysqli_query($conexao, $sql);

mysqli_close($conexao);

header("location: produtos-listar.php");

?>