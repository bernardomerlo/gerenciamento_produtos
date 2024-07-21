<?php
    include "../includes/conexao.php";

if ($_POST) {
    $apelido = $_POST["apelido"];
    $nome = $_POST["nome"];
    $nome_empresa = $_POST["nome_empresa"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $data_nascimento = $_POST["data_nascimento"];
    $senha = $_POST["senha"];

    if (!empty($apelido) && !empty($nome) && !empty($nome_empresa) && !empty($email) && !empty($telefone) && !empty($data_nascimento) && !empty($senha)) {
        $query = "INSERT INTO usuarios (apelido, nome, nome_empresa, email, telefone, data_nascimento, senha) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $db->prepare($query);
        $stmt->bindParam(1, $apelido);
        $stmt->bindParam(2, $nome);
        $stmt->bindParam(3, $nome_empresa);
        $stmt->bindParam(4, $email);
        $stmt->bindParam(5, $telefone);
        $stmt->bindParam(6, $data_nascimento);
        $stmt->bindParam(7, $senha);
        $stmt->execute();

        header("Location: /lista_compras/views/index.php");
    } else {
        echo "<script>alert('Preencha todos os campos!')</script>";
    }
}
