<?php

$id = $_GET['id'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];

$sql = "update clientes set nome = '$nome', idade = '$idade', cpf = '$cpf', telefone = '$telefone' where id = $id";

include "conexao.php";

$resultado = mysqli_query($conexao, $sql);

mysqli_close($conexao);

header("Location: clientes-listar.php");

?>