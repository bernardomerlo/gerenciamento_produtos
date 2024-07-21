
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/360/360663.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <section class="vh-100" style="background-color: #2E2E2E;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem; background-color: #D3D3D3;">
                        <div class="card-body p-5 text-center">

                            <h3 class="mb-3">Faça seu cadastro!</h3>
                            <hr class="my-4">

                            <form action="/lista_compras/controllers/cadastra_usuario.php" method="POST">
                                <div data-mdb-input-init class="form-outline mb-4">
                                    <label class="form-label" for="apelido">Apelido</label>
                                    <input type="text" name="apelido" id="apelido" class="form-control form-control-lg" placeholder="Assim que você será chamado no site!" />
                                </div>

                                <div data-mdb-input-init class="form-outline mb-4">
                                    <label class="form-label" for="nome">Nome Completo</label>
                                    <input type="text" name="nome" id="nome" class="form-control form-control-lg" placeholder="Digite seu nome completo" />
                                </div>

                                <div data-mdb-input-init class="form-outline mb-4">
                                    <label class="form-label" for="nome_empresa">Nome da sua empresa</label>
                                    <input type="text" name="nome_empresa" id="nome_empresa" class="form-control form-control-lg" placeholder="Digite o nome da sua empresa" />
                                </div>

                                <div data-mdb-input-init class="form-outline mb-4">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="Digite seu melhor email" />
                                </div>

                                <div data-mdb-input-init class="form-outline mb-4">
                                    <label class="form-label" for="telefone">Telefone</label>
                                    <input type="phone" name="telefone" id="telefone" class="form-control form-control-lg" placeholder="Digite seu número de Telefone" />
                                </div>

                                <div data-mdb-input-init class="form-outline mb-4">
                                    <label class="form-label" for="data_nascimento">Data de Nascimento</label>
                                    <input type="date" name="data_nascimento" id="data_nascimento" class="form-control form-control-lg" placeholder="Sua data de nascimento" />
                                </div>

                                <div data-mdb-input-init class="form-outline mb-4">
                                    <label class="form-label" for="senha">Senha</label>
                                    <input type="password" name="senha" id="senha" class="form-control form-control-lg" placeholder="Crie uma senha forte!" />
                                </div>

                                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block" type="submit">Cadastrar-se</button>
                                <hr class="my-4">
                                <a href="/lista_compras/views/index.php" data-mdb-button-init data-mdb-ripple-init class="btn btn-danger btn-lg btn-block">Cancelar</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>