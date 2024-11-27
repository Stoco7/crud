<?php include "header.php"; ?>

<?php
$id = $_GET['id'];
$sql = "select * from agenda where id = $id";
$dia = $horario = "";

include "conexao.php";
$resultado = mysqli_query($conexao, $sql);
while($linha = mysqli_fetch_assoc($resultado)){
    $dia = $linha['dia'];
    $horario = $linha['horario'];
    
}

mysqli_close($conexao);

?>

<main>
    <h2>Editar agenda</h2>
    <form method="post" action="agenda-atualizar.php?id=<?=$id;?>">
        <label>Serviço: <input name="dia" value="<?=$dia;?>"></label> <br>
        <label>Descrição: <input name="horario" value="<?=$horario;?>"></label> <br> 

        <button type="submit">Salvar</button>
    </form>
</main>

<?php include "footer.php"; ?>