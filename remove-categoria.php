<?php
include ("cabecalho.php");
include ("conecta.php");
include ("banco-produto.php");
include ("banco-categoria.php");

$id = $_POST['id'];
removeCategoria($conexao, $id);
header("Location: categoria-lista.php");

die();
?>
