<?php

include "../includes/conexao.php";
include "../includes/protect.php";

$nome = $_POST["nome"];
$preco = $_POST["preco"];
$estoque = $_POST["estoque"];
$codigo = $_POST["codigo"];
$id = $_SESSION['id'];
    
$result = $db->query("INSERT INTO produtos (nome, preco, quantidade, codigo_produto, usuario_id) VALUES ('$nome', '$preco', '$estoque', '$codigo', '$id')");
if ($result) {
    header('Location: /lista_compras/views/painel_produtos.php');
} else {
    header('Location: /lista_compras/views/formulario_cadastro.php');
}