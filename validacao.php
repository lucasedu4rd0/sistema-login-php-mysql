<?php
session_start();
include('conexao.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario_digitado = $_POST['usuario'];
    $senha_digitada = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE usuario = :usuario";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':usuario', $usuario_digitado);
    $stmt->execute();

    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuario && password_verify($senha_digitada, $usuario['senha'])) {
        $_SESSION['usuario'] = $usuario['usuario'];
        header("Location: painel.php");
        exit;
    } else {
        echo "<h1>Usuário ou senha incorretos!</h1>";
        echo "<a href='index.html'>Tentar novamente</a>";
    }
}
?>  