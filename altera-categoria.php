<?php
include ("cabecalho.php");
include ("conecta.php");
include ("banco-produto.php");
include ("banco-categoria.php");

$id = $_POST["id"];
$categoria = buscaCategoria($conexao, $id);
$nome = $categoria['nome'];


if (alteraCategoria($conexao, $id, $nome)){ ?>
    <p class="text-success">A categoria <?= $nome; ?> foi alterada!</p>
<?php   }else {
    $msg = mysqli_error($conexao);
    ?>
    <p class="text-danger">A categoria <?= $nome; ?> não alterada!<?= $msg ?> </p>
    <?php
}
?>

<!--<a href="produto-formulario.php"><button type="button" class="btn btn-primary">Voltar</button></a>-->
<a href="categoria-lista.php"><button type="button" class="btn btn-primary">Listar Categorias</button></a>

<?php include ("rodape.php"); ?>
