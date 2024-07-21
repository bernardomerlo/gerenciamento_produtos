<?php

include "../includes/conexao.php";

if ($_POST) {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $query = "INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)";
    $sts = $db->prepare($query);
    $sts->bindParam(1, $nome);
    $sts->bindParam(2, $email);
    $sts->bindParam(3, $senha);
    $sts->execute();

    header("Location: /lista_compras/views/index.php");
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/360/360663.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<section class="vh-100" style="background-color: #2E2E2E;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong" style="border-radius: 1rem; background-color: #D3D3D3;">
                    <div class="card-body p-5 text-center">

                        <h3 class="mb-5">Faça seu cadastro!</h3>

                        <form action="" method="POST">
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="text" name="nome" id="nome" class="form-control form-control-lg" placeholder="Digite seu nome completo" />
                                <label class="form-label" for="nome">Nome</label>
                            </div>
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="email" name="email" id="typeEmailX-2" class="form-control form-control-lg" placeholder="Digite seu melhor email" />
                                <label class="form-label" for="typeEmailX-2">Email</label>
                            </div>

                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="password" name="senha" id="typePasswordX-2" class="form-control form-control-lg" placeholder="Crie uma senha forte!" />
                                <label class="form-label" for="typePasswordX-2">Senha</label>
                            </div>
                            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block" type="submit">Cadastrar-se</button>
                            <hr class="my-4">

                            <a href="/lista_compras/views/index.php" data-mdb-button-init data-mdb-ripple-init class="btn btn-danger btn-lg btn-block" type="submit">Cancelar</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include "../includes/footer.php";
