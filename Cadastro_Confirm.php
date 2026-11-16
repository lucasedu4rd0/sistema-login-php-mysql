<?php
$pdo = new PDO("mysql:host=localhost;dbname=sistema_login", "root", "");

$usuario  = $_POST['usuario'];
$cpf = $_POST['cpf'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

$sql = $pdo->prepare("INSERT INTO usuarios (usuario, cpf, senha) VALUES (?, ?, ?)");
if ($sql->execute([$usuario, $cpf, $senha])) {

    header("Location: index.html");
    exit;
}
?>