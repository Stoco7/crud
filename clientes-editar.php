<?php include "header.php"; ?>

<?php
$id = $_GET['id'];
$sql = "select * from clientes where id = $id";
$nome = $idade = $cpf = $telefone = "";

include "conexao.php";
$resultado = mysqli_query($conexao, $sql);
while($linha = mysqli_fetch_assoc($resultado)){
    $nome = $linha['nome'];
    $idade = $linha['idade'];
    $cpf = $linha['cpf'];
    $telefone = $linha['telefone'];
}

mysqli_close($conexao);

?>

<main>
    <h2>Editar cliente</h2>
    <form method="post" action="clientes-atualizar.php?id=<?=$id;?>">
        <label>Nome: <input name="nome" value="<?=$nome;?>"></label> <br>
        <label>Idade: <input name="idade" value="<?=$idade;?>"></label> <br>
        <label>CPF: <input name="cpf" value="<?=$cpf;?>"></label> <br>
        <label>Telefone: <input name="telefone" value="<?=$telefone;?>"></label> <br>

        <button type="submit">Salvar</button>
    </form>
</main>

<?php include "footer.php"; ?>