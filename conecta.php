<?php
$host = sql211.infinityfree.com;     
$banco = if0_43467809_XXX;   
$usuario = if0_43467809;       
$senha = mirandasara26;           

try {
    $pdo = new PDO(mysql:host=$host;dbname=$banco;charset=utf8, $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo Erro na conexão com o banco de dados:  . $e->getMessage();
    exit();
}
?>