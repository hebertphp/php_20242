<?php
session_start();

// Verifica se o usuário está logado
include_once "verifica.php";
echo "<h1>Dashboard</h1>";
echo 'Bem-vindo, ' . $_SESSION['usuario'] . '!';
?>
<br>
<a href="pg1.php">Pg1</a>
<a href="logout.php">Sair</a>
