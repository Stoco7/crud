<?php

$id = $_GET['id'];
$dia = $_POST['dia'];
$horario = $_POST['horario'];

$sql = "update agenda set dia = '$dia', horario = '$horario' where id = $id";

include "conexao.php";

$resultado = mysqli_query($conexao, $sql);

mysqli_close($conexao);

header("Location: agenda-listar.php");

?>