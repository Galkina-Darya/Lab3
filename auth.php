<?php
    session_start();
    if (!isset($_SESSION['user'])==='') {
        header('Location: ../profile.php');
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="/main.css">
</head>
<body>

    <!-- Форма регистрации -->

    <form action="signup.php" method="post" enctype="multipart/form-data">
        <label>Имя</label>
        <input type="text" name="name" placeholder="Введите свое полное имя">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <label>Подтверждение пароля</label>
        <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
        <button type="submit">Зарегистрироваться</button>
        <p>
            У вас уже есть аккаунт? - <a href="/">авторизируйтесь</a>!
        </p>
        <?php
            if (!isset($_SESSION['message'])==='') {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>

</body>
</html>
