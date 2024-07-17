<?php

include "includes/conexao.php";

$id = $_GET["id"];
$nome = $_POST["nome"];
$preco = $_POST["preco"];
$quantidade = $_POST["estoque"];
$codigo = $_POST["codigo"];

$query = "UPDATE produtos SET nome = ?, preco = ?, quantidade = ?, codigo_produto = ? WHERE id = ?";

$sts = $db->prepare($query);
$sts->bindParam(1, $nome);
$sts->bindParam(2, $preco);
$sts->bindParam(3, $quantidade);
$sts->bindParam(4, $codigo);
$sts->bindParam(5, $id);

$result = $sts->execute();

if ($result) {
    header('Location: index.php');
}