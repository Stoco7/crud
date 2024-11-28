<?php include "header.php"; ?>

<?php
$id = $_GET['id'];
$sql = "select * from funcionarios where id = $id";
$nome = $idade = $telefone = $rf = "";

include "conexao.php";
$resultado = mysqli_query($conexao, $sql);
while($linha = mysqli_fetch_assoc($resultado)){
    $nome = $linha['nome'];
    $idade = $linha['idade'];
    $telefone = $linha['telefone'];
    $rf = $linha['rf'];
}

mysqli_close($conexao);

?>

<main>
    <h2>Editar serviço</h2>
    <form method="post" action="funcionarios-atualizar.php?id=<?=$id;?>">
        <label>nome: <input name="nome" value="<?=$nome;?>"></label> <br>
        <label>idade: <input name="idade" value="<?=$idade;?>"></label> <br>
        <label>Função: <input name="telefone" value="<?=$telefone;?>"></label> <br>
        <label>indicação: <input name="rf" value="<?=$rf;?>"></label> <br>

        <button type="submit">Salvar</button>
    </form>
</main>

<?php include "footer.php"; ?>