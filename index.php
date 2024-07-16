<?php
include "conexao.php";
include "header.php";

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
                echo '</tr>';
            } ?>
        </tbody>
    </table>
</div>
<?php

include "footer.php";
