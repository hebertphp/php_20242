<?php
if (!isset($_SESSION['usuario'])) {
    echo "<h1>Acesso indevido!</h1>";
    header('Refresh: 2; URL=login.php');// Redireciona para o login, após 2 segs,  se não estiver logado
    //header('Location: login.php'); // Redireciona para o login se não estiver logado
    exit();
}
?>