<?php
include ("cabecalho.php");
include ("conecta.php");
include ("banco-categoria.php");
include ("banco-produto.php");

$id = $_GET['id'];
$produto = buscaProduto($conexao, $id);
$categorias = listaCategorias($conexao);
$usado = $produto['usado'] ? "checked = 'checked'" : "";



?>

<h2 class="h2 text-light">Alterar produto</h2>
<div class="container ">
    <form action="altera-produto.php" method="post">
        <input type="hidden" name="id" value="<?=$id?>">
        <table class="table text-light">
            <tr>
                <td>Nome</td>
                <td><input  class="form-control" type="text" name="nome" autofocus value="<?=$produto['nome']?>"></td>
            </tr>
            <tr>
                <td>Preço</td>
                <td><input class="form-control" type="number" name="preco" value="<?=$produto['preco']?>"></td>
            </tr>
            <tr>
                <td>Descrição</td>
                <td><textarea class="form-control" name="descricao"><?=$produto['descricao']?></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="checkbox" value="1" name="usado" <?=$usado;?> >
                    <label >Usado</label>
                </td>
            </tr>
            <tr>
                <td>Categoria</td>
                <td>
                    <select class="browser-default custom-select" name="categoria_id">
                        <?php foreach ($categorias as $categoria):
                            $categoriaSelecionada = $produto['categoria_id'] == $categoria['id'] ? "selected='selected'" : "";
                            ?>
                            <option class="" type="radio" name="categoria_id"
                                    value="<?=$categoria['id']?>"
                                    <?=$categoriaSelecionada?>>
                                    <?=$categoria['nome']?>
                            </option>
                        <?php endforeach;?>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button class="btn btn-primary float-right" type="submit">Alterar</button>
                </td>
            </tr>

        </table>
    </form>
</div>
<?php include ("rodape.php"); ?>

