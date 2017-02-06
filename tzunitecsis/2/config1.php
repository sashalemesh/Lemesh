<?php
//if (isset($_GET['name'])) {
// Переменные с формы
    $name = $_GET['name'];


// Параметры для подключения
    $db_host = "localhost";
    $db_user = "root"; // Логин БД
    $db_password = ""; // Пароль БД
    $db_table = "user"; // Имя Таблицы БД

// Подключение к базе данных
    $db = mysql_connect($db_host, $db_user, $db_password) OR DIE("Не могу создать соединение ");

// Выборка базы
    mysql_select_db("user_job", $db);

// Установка кодировки соединения
    mysql_query("SET NAMES 'utf8'", $db);

    //$result = mysql_query("INSERT INTO " . $db_table . " (username) VALUES ('$name')");
//}