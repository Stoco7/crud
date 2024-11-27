<?php

$dia = $_POST["dia"];
$horario = $_POST["horario"];

$sql = "insert into agenda(dia, horario)
values('$dia', '$horario')";
echo $sql;

include "conexao.php";

$resultado = mysqli_query($conexao, $sql);

mysqli_close($conexao);

header("location: agenda-listar.php");

?>