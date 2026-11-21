<?php
require 'conecta.php';

try {
    $sql = "SELECT id, nome, cpf FROM aluno";
    $stmt = $pdo->query($sql);
    $alunos = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Erro ao buscar alunos: " . $e->getMessage();
    exit();
}
?>

<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Alunos</title>
    <style>
        table { border-collapse: collapse; width: 50%; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2>Lista de Alunos Cadastrados</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>CPF</th>
        </tr>
        <?php foreach ($alunos as $aluno): ?>
        <tr>
            <td><?php echo htmlspecialchars($aluno['id']); ?></td>
            <td><?php echo htmlspecialchars($aluno['nome']); ?></td>
            <td><?php echo htmlspecialchars($aluno['cpf']); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a href="index.php">Voltar ao Login</a>
</body>
</html>