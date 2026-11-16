<?php
$host = "localhost";
$dbname = "sistema_login";
$usuario_db = "root";
$senha_db = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $usuario_db, $senha_db);
    // Configura o PDO para lançar exceções em caso de erro
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro na ligação com a base de dados: " . $e->getMessage();
}
?>