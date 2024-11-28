<?php

$id = $_GET['id'];
$nome= $_POST['nome'];
$idade = $_POST['idade'];
$telefone = $_POST['telefone'];
$rf = $_POST['rf'];

$sql = "update funcionarios set nome = '$nome', idade = '$idade', telefone = '$telefone', rf = '$rf' where id = $id";

include "conexao.php";

$resultado = mysqli_query($conexao, $sql);

mysqli_close($conexao);

header("Location: funcionarios-listar.php");

?>