<?php

$usuario = "root";
$senha = "";
$servidor = "localhost";
$porta = "3306";
$nome_banco = "db_barbearia";

$conexao = mysqli_connect($servidor, $usuario, $senha, $nome_banco, $porta);

?>