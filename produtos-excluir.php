<?php

$id = $_GET['id'];

$sql = "delete from produtos where id = $id";

include "conexao.php";

$resultado = mysqli_query($conexao, $sql);

mysqli_close($conexao);

header("Location: produtos-listar.php");

?>