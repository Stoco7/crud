<?php

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];

$sql = "insert into clientes(nome, idade, cpf, telefone)
values('$nome', '$idade', '$cpf', '$telefone')";
echo $sql;

include "conexao.php";

$resultado = mysqli_query($conexao, $sql);

mysqli_close($conexao);

header("Location: clientes-listar.php");

?>