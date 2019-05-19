<?php
include ("cabecalho.php");
include ("conecta.php");
include ("banco-produto.php");
include ("banco-categoria.php");
?>

<table class="table table-bordered table-striped">
    <?php
    $categorias = listaCategorias($conexao);
    foreach ($categorias as $categoria):
        ?>
        <tr>
            <td class="align-middle"><?=$categoria['id'];?></td>
            <td class="align-middle"><?=$categoria['nome'];?></td>
            <td class="text-center">
                <form action="categoria-altera-formulario.php?id=<?=$categoria['id'];?>" method="post">
                    <input type="hidden" name="id" value="<?=$categoria['id'];?>">
                    <button class="btn btn-warning">Alterar</button>
                </form>
            </td>
            <td class="text-center">
                <form action="remove-categoria.php?id=<?=$categoria['id'];?>" method="post">
                    <input type="hidden" name="id" value="<?=$categoria['id'];?>">
                    <button class="btn btn-danger">Remover</button>
                </form>
            </td>
        </tr>
    <?php
    endforeach;
    ?>
</table>
<a href="categoria-formulario.php"><button class="btn btn-primary float-left">+</button></a>
<?php include ("rodape.php"); ?>

