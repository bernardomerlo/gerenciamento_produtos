<?php
include "includes/conexao.php";
include "includes/header.php";

?>
<div class="container">
    <form action="cadastra.php" class="needs-validation" method="POST">
        <div class="form-group">
            <label for="Nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" aria-describedby="nome" placeholder="Nome do Produto." required>
        </div>
        <div class="form-group py-2">
            <label for="preco">Preço</label>
            <input type="text" class="form-control" name="preco" id="preco" aria-describedby="preco" placeholder="Preço do Produto. (sem R$)" required>
        </div>
        <div class="form-group py-2">
            <label for="estoque">Quantidade em Estoque</label>
            <input type="number" class="form-control" name="estoque" id="estoque" aria-describedby="estoque" placeholder="Número desse produto em estoque." required>
        </div>
        <div class="form-group py-2">
            <label for="codigo">Código do Produto</label>
            <input type="text" class="form-control" name="codigo" id="codigo" aria-describedby="codigo" placeholder="Seu código do produto." required>
        </div>
        <div class="d-flex justify-content-center py-3">
            <button type="submit" class="btn btn-outline-success">Adicionar</button>
            <a href="painel_produtos.php" class="btn btn-outline-danger mx-2">Cancelar</a>
        </div>
    </form>
</div>
<?php
include "includes/footer.php";
