<?php
// Подключаем библиотеку RedBeanPHP
require "libs/rb-mysql.php";

// Подключаемся к БД
R::setup("127.0.0.1", "root", "1234", "Lab_3_Galkina");

// Проверка подключения к БД
if(!R::testConnection()) die('No DB connection!');

session_start(); // Создаем сессию для авторизации
?>

<html>
    <head>
        <title>php member system | registration form</title>
    </head>

    <body>
        <h1>member system tutorial - register</h1> 
            <a href="./index.php">Home</a> | 
            <a href="./register.php">Register</a> | 
            <a href="./login.php">Login</a> 
        <hr />

        <!-- error message code here -->

        <!-- registration form html code here -->
        
    </body>
</html>
