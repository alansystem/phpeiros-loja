<?php
    include ("cabecalho.php");
    include ("conecta.php");
    include ("banco-categoria.php");

    $categorias = listaCategorias($conexao);

?>

<h2 class="h2 text-light">Formulário de produto</h2>
<div class="container">
<form action="adiciona-produto.php" method="post">
    <table class="table">
        <tr>
            <td class="text-light">Nome</td>
            <td><input  class="form-control" type="text" name="nome" autofocus></td>
        </tr>
        <tr>
            <td class="text-light">Preço</td>
            <td><input class="form-control" type="number" name="preco"></td>
        </tr>
        <tr>
            <td class="text-light">Descrição</td>
            <td><textarea class="form-control" name="descricao"></textarea></td>
        </tr>
        <tr>
            <td class="text-light">Categoria</td>
            <td>
                <select class="browser-default custom-select" name="categoria_id">
                <?php foreach ($categorias as $categoria):?>
                    <option class="" type="radio" name="categoria_id" value="<?=$categoria['id']?>">
                        <?=$categoria['nome']?></option>
                <?php endforeach;?>
                </select>
            </td>
        </tr>
        <tr>
            <td><input class="btn btn-primary " type="submit" value="Cadastrar"></td>
        </tr>

    </table>
</form>
</div>
<?php include ("rodape.php"); ?>

