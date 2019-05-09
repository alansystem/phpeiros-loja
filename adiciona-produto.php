<?php
    include ("cabecalho.php");
    include ("conecta.php");
    include ("banco-produto.php");
    include ("banco-categoria.php");

    $nome = $_POST["nome"];
    $preco = $_POST["preco"];
    $descricao = $_POST["descricao"];
    $categoria_id = $_POST["categoria_id"];

    $conexao = mysqli_connect('localhost', 'root', '', 'loja');

    if (insereProduto($conexao, $nome, $preco, $descricao, $categoria_id)){ ?>
        <p class="text-success">O produto <?= $nome; ?> foi adicionado com o preço de R$<?= $preco; ?> !</p>
    <?php   }else {
        $msg = mysqli_error($conexao);
        ?>
        <p class="text-danger"> O produto <?= $nome; ?> não foi adicionado: <?= $msg ?> </p>
    <?php
        }
    ?>

    <a href="produto-formulario.php"><button type="button" class="btn btn-primary">Voltar</button></a>
    <a href="produto-lista.php"><button type="button" class="btn btn-primary">Listar Produtos</button></a>

<?php include ("rodape.php"); ?>
