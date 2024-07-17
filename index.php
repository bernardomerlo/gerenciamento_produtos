<?php
include "includes/conexao.php";
include "includes/header.php";

?>
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
            $rs = $db->query("SELECT id, nome, quantidade, preco, codigo_produto FROM produtos");
            while ($row = $rs->fetch(PDO::FETCH_OBJ)) {
                echo '<tr>';
                echo '<th scope="row">' . $row->id . '</th>';
                echo '<td   >' . $row->nome . '</td>';
                echo '<td>' . $row->quantidade . '</td>';
                echo '<td>R$' . $row->preco . '</td>';
                echo '<td>' . $row->codigo_produto . '</td>';
                echo '<td><a href="formulario_edicao.php?id=' . $row->id . '" class="btn btn-outline-warning mx-2">Editar</a></td>';
                echo '<td><a href="formulario_remocao.php?id=' . $row->id . '" class="btn btn-outline-danger mx-2">Remover</a></td>';
                echo '</tr>';
            } ?>
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        <a href="formulario_cadastro.php" class="btn btn-outline-success mx-2">Adicionar novo Produto</a>
    </div>
</div>
<?php

include "includes/footer.php";
