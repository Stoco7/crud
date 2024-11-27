<?php

$id = $_GET['id'];
$produto = $_POST['produto'];
$marca = $_POST['marca'];
$funcao = $_POST['funcao'];
$indicacao = $_POST['indicacao'];

$sql = "update agenda set produto = '$produto', marca = '$marca', funcao = '$funcao', indicacao = '$categoria' where id = $id";

include "conexao.php";

$resultado = mysqli_query($conexao, $sql);

mysqli_close($conexao);

header("Location: produtos-listar.php");

?>