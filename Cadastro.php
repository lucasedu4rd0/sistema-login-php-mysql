<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel=stylesheet href=style.css>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h1>Seja bem-vindo! Antes de tudo realize seu login!</h1>
    <form action="Cadastro_Confirm.php" method="POST">
    <label for="usuario">Usuário:</label>
    <input type="text" id="Usuario" name="usuario" required>

    <label for="cpf">CPF:</label>
    <input type="text" id="cpf" name="cpf" maxlength="14" placeholder="000.000.000-00">
    
    <label for="senha">Senha:</label>
    <input type="password" id="senha" name="senha" required>
    
    <button type="submit" class="botao-cadastro">Cadastrar</button>
</form>
</body>
</html>