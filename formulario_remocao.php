<?php
include "includes/conexao.php";
include "includes/header.php";

$id = $_GET["id"];

$query = "SELECT nome FROM produtos WHERE id = ?";
$sts = $db->prepare($query);
$sts->bindParam(1, $id);
$sts->execute();
$produto = $sts->fetch(PDO::FETCH_OBJ);

?>
<div class="container">
    <div class="d-flex justify-content-center mb-5">
        <h2 class="center">Tem certeza que deseja remover o produto <?php echo $produto->nome ?>?</h2>
    </div>
    <div class="d-flex justify-content-center">
        <a href="remove.php?id=<?php echo $id ?>" class="btn btn-outline-danger mx-2">Remover</a>
        <a href="index.php" class="btn btn-outline-secondary mx-2">Cancelar</a>
    </div>
</div>
<?php
include "includes/footer.php";
