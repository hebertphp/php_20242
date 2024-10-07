<?php
session_start(); // Inicia a sessão

// Conectar ao banco de dados
$pdo = new PDO('sqlite:usuarios.db');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Consultar o banco de dados
    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE usuario = :usuario");
    $stmt->bindParam(':usuario', $usuario);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($senha, $user['senha'])) {
        // Autenticação bem-sucedida
        $_SESSION['usuario'] = $user['usuario'];
        header('Location: dashboard.php'); // Redireciona para uma página protegida
        exit();
    } else {
        // Autenticação falhou
        echo "<h1>Usuário ou senha inválidos!</h1>";
        
        header('Refresh: 3; URL=login.php');

    }
}
else {
    // Autenticação falhou
    echo "<h1>Acesso indevido!!!</h1>";

    header('Refresh: 3; URL=login.php');
}
$pdo=null;
$stmt=null;
?>
