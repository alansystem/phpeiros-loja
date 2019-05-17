<?php
include ("cabecalho.php");
include ("conecta.php");
include ("banco-produto.php");
include ("banco-categoria.php");

$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$categoria_id = $_POST["categoria_id"];
$id = $_POST["id"];

if(array_key_exists('usado', $_POST)){
    $usado = 1;
} else {
    $usado = 0;
}


$conexao = mysqli_connect('localhost', 'root', '', 'loja');

if (alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado)){ ?>
    <p class="text-success">O produto <?= $nome; ?> foi alterado!</p>
<?php   }else {
    $msg = mysqli_error($conexao);
    ?>
    <p class="text-danger"> O produto <?= $nome; ?> não foi alterado: <?= $msg ?> </p>
    <?php
}
?>

<a href="produto-formulario.php"><button type="button" class="btn btn-primary">Voltar</button></a>
<a href="produto-lista.php"><button type="button" class="btn btn-primary">Listar Produtos</button></a>

<?php include ("rodape.php"); ?>
