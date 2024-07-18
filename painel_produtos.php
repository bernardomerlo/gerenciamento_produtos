<?php
include "includes/conexao.php";
include "protect.php";

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supermercado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <header>
            <h1 class="text-center pt-4 pb-0">Bem vindo, <?php echo $_SESSION['nome'] ?>!</h1>
        </header>
    </div>
    <br>
    <br>
    <div class="container">
        <table class="table">
            <thead class="justify-content-center">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Produto</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Código Produto</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Remover</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $rs = $db->query("SELECT id, nome, quantidade, preco, codigo_produto FROM produtos WHERE usuario_id = " . $_SESSION['id']);
                if ($rs) {
                    while ($linha = $rs->fetch(PDO::FETCH_OBJ)) {
                        echo "<tr>";
                        echo "<th scope='row'>$linha->id</th>";
                        echo "<td>$linha->nome</td>";
                        echo "<td>$linha->quantidade</td>";
                        echo "<td>$linha->preco</td>";
                        echo "<td>$linha->codigo_produto</td>";
                        echo "<td><a href='formulario_edicao.php?id=$linha->id' class='btn btn-outline-primary'>Editar</a></td>";
                        echo "<td><a href='formulario_remocao.php?id=$linha->id' class='btn btn-outline-danger'>Remover</a></td>";
                        echo "</tr>";
                    }
                } ?>
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            <a href="formulario_cadastro.php" class="btn btn-outline-success mx-2">Adicionar novo Produto</a>
        </div>

        <p>
            <a href="logout.php">Sair</a>
        </p>
    </div>
    <?php

    include "includes/footer.php";
