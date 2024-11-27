<?php

$id = $_GET['id'];

$sql = "delete from clientes where id = $id";

include "conexao.php";

$resultado = mysqli_query($conexao, $sql);

mysqli_close($conexao);

header("Location: clientes-listar.php");

?>