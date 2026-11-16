<?php
session_start();
echo "<h1>Bem-vindo ao Painel!</h1>";
echo "Estás logado com sucesso, " . $_SESSION['usuario'];
?>
