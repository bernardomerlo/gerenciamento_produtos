<?php
include("conexao.php");
include("header.php");

// $stmt = $db->prepare("INSERT INTO produtos(nome, preco, codigo_produto) VALUES(?, ?, ?)");
// $produto = "Macarrão";
// $stmt->bindParam(1, $produto);
// $valor = 23.5;
// $stmt->bindParam(2, $valor);
// $codigo_produto = "912038";
// $stmt->bindParam(3, $codigo_produto);
// $stmt->execute();
echo "Produto cadastrado com sucesso!";
include("footer.php"); ?>