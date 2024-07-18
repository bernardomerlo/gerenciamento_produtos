<?php
include "includes/conexao.php";
include "includes/header.php";

$id = $_GET["id"];

?>
<div class="container">
    <div class="d-flex justify-content-center mb-5">
        <h2 class="center">Tem certeza que deseja remover?</h2>
    </div>
    <div class="d-flex justify-content-center">
        <a href="remove.php?id=<?php echo $id ?>" class="btn btn-outline-danger mx-2">Remover</a>
        <a href="painel_produtos.php" class="btn btn-outline-secondary mx-2">Cancelar</a>
    </div>
</div>
<?php
include "includes/footer.php";
