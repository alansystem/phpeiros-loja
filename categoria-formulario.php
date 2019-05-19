<?php
include ("cabecalho.php");
include ("conecta.php");
include ("banco-categoria.php");
include ("banco-produto.php");
?>

<h2>Formulário de categoria</h2>
<div class="container ">
    <form action="adiciona-categoria.php" method="post">
        <table class="table">
            <tr>
                <td>Nome</td>
                <td><input  class="form-control" type="text" name="nome" autofocus></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button class="btn btn-primary float-right" type="submit">Adicionar</button>
                </td>
            </tr>

        </table>
    </form>
</div>
<?php include ("rodape.php"); ?>

