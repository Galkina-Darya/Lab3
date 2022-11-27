<?php

    session_start();
    require_once 'connect.php';

    $name = $_POST['name'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password === $password_confirm) {

        

        $password = md5($password);

        $result = $connect->query("INSERT INTO `Users` (`id`, `login`, `password`, `name`) VALUES (NULL, '$login', '$password', '$name')");

        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: index.php');


    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: auth.php');
    }

?>
