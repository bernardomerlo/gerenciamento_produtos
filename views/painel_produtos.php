<?php
include "../includes/conexao.php";
include "../includes/protect.php";

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supermercado</title>
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/360/360663.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/lista_compras/views/painel_produtos.php" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">Menu</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Pedidos</span></a>
                        </li>
                        <li>
                            <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Produtos</span> </a>
                            <ul class="collapse nav flex-column ms-1 show" id="submenu3" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="/lista_compras/views/formulario_cadastro.php" class="nav-link px-0"> <span class="btn btn-outline-primary">Adicionar novo Produto</span></a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="btn btn-outline-primary">Remover Todos</span></a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="btn btn-outline-primary">Listar maiores</span></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Filiais</span> </a>
                        </li>
                    </ul>
                    <hr>
                    <div class="dropdown pb-4">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://avatars.githubusercontent.com/u/132675150?s=400&u=50222728630a393e373fcf8d0cff8516d4e39f52&v=4" alt="hugenerd" width="30" height="30" class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1"><?php echo $_SESSION['nome'] ?></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                            <li><a class="dropdown-item" href="/lista_compras/views/perfil.php">Perfil</a></li>
                            <li><a class="dropdown-item" href="#">Configurações</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/lista_compras/views/logout.php">Sair</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col py-3">
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
                                    echo "<td><a href='/lista_compras/views/formulario_edicao.php?id=$linha->id' class='btn btn-outline-primary'>Editar</a></td>";
                                    echo "<td><a href='/lista_compras/views/formulario_remocao.php?id=$linha->id' class='btn btn-outline-danger'>Remover</a></td>";
                                    echo "</tr>";
                                }
                            } ?>
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                    </div>
                </div>
                <?php

                include "../includes/footer.php";
                ?>
            </div>
        </div>
    </div>