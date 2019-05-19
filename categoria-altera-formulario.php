<?php
include ("cabecalho.php");
include ("conecta.php");
include ("banco-categoria.php");
include ("banco-produto.php");

$id = $_GET['id'];
$categoria = buscaCategoria($conexao, $id);
$nome = $categoria['nome'];


?>

<h2>Alterar categoria</h2>
<div class="container ">
    <form action="altera-categoria.php" method="post">
        <input type="hidden" name="id" value="<?=$id?>">
        <table class="table text-light">
            <tr>
                <td>ID</td>
                <td><input  class="form-control" type="text" name="id"  value="<?=$categoria['id']?>"></td>
            </tr>
            <tr>
                <td>Nome</td>
                <td><input  class="form-control" type="text" name="nome"  value="<?=$categoria['nome']?>"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button class="btn btn-warning float-right" type="submit">Alterar</button>
                </td>
            </tr>

        </table>

    </form>
</div>
<?php include ("rodape.php"); ?>

