<?php

include "includes/conexao.php";

$id = $_GET["id"];

$query = "DELETE FROM produtos WHERE id = ?";
$sts = $db->prepare($query);
$sts->bindParam(1, $id);
$result = $sts->execute();
if ($result) {
    header('Location: index.php');
}
