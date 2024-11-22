<?php

$id = $_GET['id'];

$sql = "delete from servicos where id = $id";

include "conexao.php";

$resultado = mysqli_query($conexao, $sql);

mysqli_close($conexao);

header("Location: servicos-listar.php");

?>