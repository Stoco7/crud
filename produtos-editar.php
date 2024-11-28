<?php include "header.php"; ?>

<?php
$id = $_GET['id'];
$sql = "select * from produtos where id = $id";
$produto = $marca = $funcao = $indicacao = "";

include "conexao.php";
$resultado = mysqli_query($conexao, $sql);
while($linha = mysqli_fetch_assoc($resultado)){
    $produto = $linha['produto'];
    $marca = $linha['marca'];
    $funcao = $linha['funcao'];
    $indicacao = $linha['indicacao'];
}

mysqli_close($conexao);

?>

<main>
    <h2>Editar serviço</h2>
    <form method="post" action="produtos-atualizar.php?id=<?=$id;?>">
        <label>Produto: <input name="produto" value="<?=$produto;?>"></label> <br>
        <label>Marca: <input name="marca" value="<?=$marca;?>"></label> <br>
        <label>Função: <input name="funcao" value="<?=$funcao;?>"></label> <br>
        <label>indicação: <input name="indicacao" value="<?=$indicacao;?>"></label> <br>

        <button type="submit">Salvar</button>
    </form>
</main>

<?php include "footer.php"; ?>