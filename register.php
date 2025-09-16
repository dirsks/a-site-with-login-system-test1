<?php
session_start();

// Criar arquivo para armazenar usuários (simples)
$usersFile = "users.txt";

// Pegar dados do form
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Salvar no arquivo
$file = fopen($usersFile, "a");
fwrite($file, "$username|$password\n");
fclose($file);

echo "Usuário registrado com sucesso! <a href='index.html'>Voltar</a>";
?>