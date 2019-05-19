<?php
    include ("cabecalho.php");
    include ("conecta.php");
    include ("banco-produto.php");

    $getRemovido = array_key_exists("removido", $_GET);
    $removido = $getRemovido == "true";

    if ($removido) :?>
        <p class="alert-success" >Produto apagado com sucesso!</p >
    <?php endif; ?>

    <table class="table table-bordered table-striped ">
<?php
    $produtos = listaProdutos($conexao);
    foreach ($produtos as $produto):
?>
    <tr>
        <td class="align-middle"><?=$produto['nome'];?></td>
        <td class="text-center align-middle"><?=$produto['preco'];?></td>
        <td class="align-middle"><?=substr($produto['descricao'],0,50).'...';?></td>
        <td class="align-middle"><?=$produto['categoria_nome'];?></td>
        <td class="text-center">
            <form action="visualiza-produto.php?id=<?=$produto['id']?>" method="post">
                <input type="hidden" name="id" value="<?=$produto['id'];?>">
                <button class="btn btn-info">Visualizar</button>
            </form>
        </td>
        <td class="text-center">
            <form action="produto-altera-formulario.php?id=<?=$produto['id'];?>" method="post">
                <input type="hidden" name="id" value="<?=$produto['id'];?>">
                <button class="btn btn-warning">Alterar</button>
            </form>
        </td>
        <td class="text-center">
            <form action="remove-produto.php?id=<?=$produto['id'];?>" method="post">
                <input type="hidden" name="id" value="<?=$produto['id'];?>">
                <button class="btn btn-danger">Remover</button>
            </form>
        </td>
    </tr>
<?php
    endforeach;
?>
    </table>
<a href="produto-formulario.php"><button class="btn btn-primary float-left">+</button></a>
<?php include ("rodape.php"); ?>

