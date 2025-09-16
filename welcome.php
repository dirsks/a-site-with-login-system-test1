<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Bem-vindo</title>
</head>
<body>
  <h1>Olá, <?php echo $_SESSION['username']; ?>! 🎉</h1>
  <a href="logout.php">Sair</a>
</body>
</html>