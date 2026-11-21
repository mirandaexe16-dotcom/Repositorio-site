<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Site playdrums</title>
</head>
<body>
    <?php echo "<h1>Bem Vindo ao PlayDrums</h1>" ?>

    <h2>Página de Login</h2>
    <form action="login.php" method="POST">
        <label>CPF:</label><br>
        <input type="text" name="cpf" required><br><br>
        
        <label>Senha:</label><br>
        <input type="password" name="senha" required><br><br>
        
        <button type="submit">Entrar</button>
    </form>
</body>
</html>