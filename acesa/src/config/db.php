<?php
$host = "localhost";
$user = "root";
$password = "D03m07a99!"; // Substitua pela sua senha
$dbname = "clientes_acesa";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
