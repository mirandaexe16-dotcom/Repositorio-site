<?php
require 'conecta.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];

    try {
        $sql = "SELECT * FROM aluno WHERE cpf = ? AND senha = ?";
        $stmt = $pdo->prepare($sql);
        
        $stmt->execute([$cpf, $senha]);
        
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario) {
            echo "<h2>Bem-vindo, " . htmlspecialchars($usuario['nome']) . "!</h2>";
            echo "<p>Login realizado com sucesso.</p>";
            echo '<a href="lista.php">Ver lista de alunos</a>';
        } else {
            echo "<h2>CPF ou senha inválidos!</h2>";
            echo '<a href="index.php">Tentar novamente</a>';
        }
    } catch (PDOException $e) {
        echo "Erro ao consultar o banco de dados: " . $e->getMessage();
    }
}
?>