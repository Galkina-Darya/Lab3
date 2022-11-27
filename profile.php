<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /index.php');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>

    <!-- Профиль -->

    <form>
        <h2 style="margin: 10px 0;">Welcome, <?= $_SESSION['user']['name'] ?></h2>
        <a href="#"><?= $_SESSION['user']['name'] ?></a>
        <button><a href="logout.php" class="logout">Выход</a></button>
    </form>

</body>
</html>
