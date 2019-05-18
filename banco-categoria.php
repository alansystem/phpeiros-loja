<?php

    function listaCategorias($conexao){
        $categorias = [];
        $query = "select * from categorias";
        $resultado = mysqli_query($conexao, $query);
        while($categoria = mysqli_fetch_assoc($resultado)){
            array_push($categorias, $categoria);
        }

        return $categorias;
    }

function buscaCategoria($conexao, $id){
    $query = "select * from categorias where id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}


    function removeCategoria($conexao, $id){
        $query = "delete from categorias where id = {$id}";
        return mysqli_query($conexao, $query);
    }

function alteraCategoria($conexao, $id, $nome){
    $query = "UPDATE categorias SET nome = '{$nome}' WHERE id = {$id}";
    return mysqli_query($conexao,$query);
}

function insereCategoria($conexao, $nome){
    $query = "INSERT INTO categorias (nome) VALUES ('{$nome}')";
    return mysqli_query($conexao,$query);
}