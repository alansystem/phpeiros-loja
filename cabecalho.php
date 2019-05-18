<html>
<head>
    <title>Minha Loja</title>
    <meta charset="utf-8">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/loja.css" rel="stylesheet">
</head>
<body class="bg-dark">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="index.php">Minha Loja</a>

    <div class="nav-pills ">
        <!-- Example single danger button -->
        <div class="btn-group">
            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Produtos
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="produto-formulario.php">Adicionar</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="produto-lista.php">Listar</a>
            </div>
        </div>

        <!-- Example single danger button -->
        <div class="btn-group">
            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Categorias
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="categoria-formulario.php">Adicionar</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="categoria-lista.php">Listar</a>
            </div>
        </div>



    </div>
</nav>


<div class="container">
    <div class="principal">