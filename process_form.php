<?php
$servername = "localhost";
$username = "user";
$password = "root";
$dbname = "vendedores_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];
$telefone = $_POST['telefone'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$email = $_POST['email'];
$data_admissao = $_POST['data_admissao'];
$regional = $_POST['regional'];

$sql = "INSERT INTO vendedores (nome, data_nascimento, telefone, cpf, endereco, email, data_admissao, regional)
        VALUES ('$nome', '$data_nascimento', '$telefone', '$cpf', '$endereco', '$email', '$data_admissao', '$regional')";

if ($conn->query($sql) === true) {
    echo "Novo registro criado com sucesso";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
