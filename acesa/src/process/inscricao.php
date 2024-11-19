<?php
// Conexão com o banco de dados
$conn = new mysqli("localhost", "root", "D03m07a99!", "clientes_acesa");

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Recebe os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cpf = $_POST['cpf'];
$data_nascimento = $_POST['data_nascimento'];

// Insere os dados na tabela clientes
$sql = "INSERT INTO clientes (nome, email, telefone, cpf, data_nascimento) 
        VALUES ('$nome', '$email', '$telefone', '$cpf', '$data_nascimento')";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

// Fecha a conexão
$conn->close();
?>
