<?php
    include ("cabecalho.php");
    include ("conecta.php");
    include ("banco-produto.php");
    include ("banco-categoria.php");

    $nome = $_POST["nome"];

    $conexao = mysqli_connect('localhost', 'root', '', 'loja');

    if (insereCategoria($conexao, $nome)){ ?>
        <p class="text-success">A categoria <?= $nome; ?> foi adicionada!</p>
    <?php   }else {
        $msg = mysqli_error($conexao);
        ?>
        <p class="text-danger">A categoria <?= $nome; ?> não foi adicionada: <?= $msg ?> </p>
    <?php
        }
    ?>

    <a href="categoria-formulario.php"><button type="button" class="btn btn-primary">Voltar</button></a>
    <a href="categoria-lista.php"><button type="button" class="btn btn-primary">Listar categorias</button></a>

<?php include ("rodape.php"); ?>
