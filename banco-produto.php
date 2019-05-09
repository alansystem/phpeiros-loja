<?php
function listaProdutos($conexao){
    $produtos = [];
    $resultado = mysqli_query($conexao, "select p.*,c.nome as categoria_nome from produtos as p join categorias as c on c.id = p.categoria_id");
    while ($produto = mysqli_fetch_assoc($resultado)){
        array_push($produtos, $produto);
    }

    return $produtos;
}

function insereProduto($conexao, $nome, $preco, $descricao, $categoria_id){
    $query = "INSERT INTO produtos (nome, preco, descricao, categoria_id) VALUES ('{$nome}', '{$preco}', '{$descricao}', '{$categoria_id}')";
    return mysqli_query($conexao,$query);
}

function removeProduto($conexao, $id){
    $query = "delete from produtos where id = {$id}";
    return mysqli_query($conexao, $query);
}