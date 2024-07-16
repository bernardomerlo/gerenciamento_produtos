<?php
include "includes/conexao.php";
include "includes/header.php";
?>
<div class="container">
    <div class="d-flex justify-content-center">
        <a class="btn btn-outline-warning mx-2">Remover</a>
        <a href="index.php" class="btn btn-outline-danger mx-2">Cancelar</a>
    </div>
</div>
<?php
echo "Produto removido com sucesso!";
include "includes/footer.php";
