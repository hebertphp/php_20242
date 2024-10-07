<?php
session_start();
session_destroy(); // Destroi a sessão
$_SESSION=array(); // Apaga a variável $_SESSION
header('Location: login.php'); // Redireciona para o login
?>
