<?php
session_start();

// Verifica se o usuário está logado
include_once "verifica.php";
echo "<h1>PG1</h1>";
echo 'Bem-vindo, ' . $_SESSION['usuario'] . '!';
?>
<br>
<a href="dashboard.php">Dashboard</a>
<a href="logout.php">Sair</a>