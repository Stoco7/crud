<?php

$id = $_GET['id'];

$sql = "delete from agenda where id = $id";

include "conexao.php";

$resultado = mysqli_query($conexao, $sql);

mysqli_close($conexao);

header("Location: agenda-listar.php");

?>