<?php

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$telefone = $_POST['telefone'];
$rf = $_POST['rf'];

$sql = "insert into funcionarios(nome, idade, telefone, rf)
values('$nome', '$idade', '$telefone', '$rf')";
echo $sql;

include "conexao.php";

$resultado = mysqli_query($conexao, $sql);

mysqli_close($conexao);

header("location: funcionarios-listar.php");

?>