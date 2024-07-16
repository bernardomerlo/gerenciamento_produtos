<?php

include "includes/conexao.php";

$nome = $_POST["nome"];
$preco = $_POST["preco"];
$estoque = $_POST["estoque"];
$codigo = $_POST["codigo"];

$result = $db->query("INSERT INTO produtos (nome, preco, quantidade, codigo_produto) VALUES ('$nome', '$preco', '$estoque', '$codigo')");
if ($result) {
    header('Location: index.php');
} else {
    header('Location: formulario_cadastro.php');
}