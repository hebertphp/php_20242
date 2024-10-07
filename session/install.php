<?php
// Conectar ao banco SQLite
$pdo = new PDO('sqlite:usuarios.db');

// Criar tabela de usuários (se não existir)
$pdo->exec("CREATE TABLE IF NOT EXISTS usuarios (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    usuario TEXT NOT NULL unique,
    senha TEXT NOT NULL
)");

// Inserir um usuário (apenas exemplo, pode ser feito manualmente)
$senhamd5=md5('senha123');
$senhaSegura = password_hash('senha123', PASSWORD_DEFAULT);
echo strlen($senhamd5). "--". $senhamd5."<br>";
echo strlen($senhaSegura). "--". $senhaSegura."<br>";
//exit();
$pdo->exec("INSERT INTO usuarios (usuario, senha) VALUES ('joao', '$senhaSegura')");
echo "Tabela criada com sucesso!";
$pdo=null;

?>
