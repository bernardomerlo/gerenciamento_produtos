<?php
include "../includes/protect.php";
include "../includes/conexao.php";

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
    <style>
        .img-account-profile {
            width: 350px;
            height: 350px;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <div class="container-xl px-4 mt-4">
        <div class="row">
            <div class="col-xl-4">
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Foto de Perfil</div>
                    <div class="card-body text-center">
                        <img class="img-account-profile rounded-circle mb-2" src="https://avatars.githubusercontent.com/u/132675150?s=400&u=50222728630a393e373fcf8d0cff8516d4e39f52&v=4" alt="">
                        <div class="small font-italic text-muted mb-4">JPG ou PNG menores que 5 MB</div>
                        <button class="btn btn-primary" type="button">Atualizar imagem</button>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="card mb-4">
                    <div class="card-header">Detalhes da Conta</div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Apelido (como você será chamado no site)</label>
                                <input class="form-control" id="inputUsername" type="text" placeholder="Preencha com seu apelido" value="username">
                            </div>
                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputFirstName">Nome completo</label>
                                    <input class="form-control" id="inputFirstName" type="text" placeholder="Preencha com seu nome completo" value="Bernardo">
                                </div>
                            </div>
                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputOrgName">Nome da Empresa</label>
                                    <input class="form-control" id="inputOrgName" type="text" placeholder="Preencha com nome da sua empresa" value="GP Super">
                                </div>
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLocation">Localização</label>
                                    <input class="form-control" id="inputLocation" type="text" placeholder="Preencha com sua localização" value="Vitória, ES">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                <input class="form-control" id="inputEmailAddress" type="email" placeholder="Preencha com seu melhor email" value="nome@exemplo.com">
                            </div>
                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputPhone">Número de Telefone</label>
                                    <input class="form-control" id="inputPhone" type="tel" placeholder="Preencha com seu número de celular" value="(27) 12345-6789">
                                </div>
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputBirthday">Data de nascimento</label>
                                    <input class="form-control" id="inputBirthday" type="text" name="birthday" placeholder="Preencha com sua data de nascimento" value="06/10/1988">
                                </div>
                            </div>
                            <button class="btn btn-primary" type="button">Salvar Alterações</button>
                            <a href="/lista_compras/views/painel_produtos.php" class="btn btn-danger" type="button">Voltar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>