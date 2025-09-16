<?php
session_start();

$usersFile = "users.txt";

$username = $_POST['username'];
$password = $_POST['password'];

// Verificar se existe
$lines = file($usersFile, FILE_IGNORE_NEW_LINES);

foreach ($lines as $line) {
    list($user, $hash) = explode("|", $line);
    if ($user === $username && password_verify($password, $hash)) {
        $_SESSION['username'] = $username;
        header("Location: welcome.php");
        exit;
    }
}

echo "Usuário ou senha incorretos! <a href='index.html'>Tentar novamente</a>";
?>