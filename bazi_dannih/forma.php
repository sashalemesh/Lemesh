<html>
<head>
</head>
<body>

    <form method="POST" action="">
        <input name="name" type="text" placeholder="Имя"/>
        <input name="text" type="text" placeholder="Текст"/>
        <input type="submit" value="Отправить"/>
    </form>

<?php

if (isset($_POST['name']) && isset($_POST['text'])){

    // Переменные с формы
    $name = $_POST['name'];
    $text = $_POST['text'];

    // Параметры для подключения
    $db_host = "localhost";
    $db_user = "root"; // Логин БД
    $db_password = ""; // Пароль БД
    $db_table = "mytable"; // Имя Таблицы БД

    // Подключение к базе данных
    $db = mysql_connect($db_host,$db_user,$db_password) OR DIE("Не могу создать соединение ");

    // Выборка базы
    mysql_select_db("user",$db);

    // Установка кодировки соединения
    mysql_query("SET NAMES 'utf8'",$db);

    $result = mysql_query ("INSERT INTO ".$db_table." (name,text) VALUES ('$name','$text')");

    if ($result = 'true'){
        echo "Информация занесена в базу данных";
    }else{
        echo "Информация не занесена в базу данных";
    }
}
//mysql_close($db);
?>

</body>
</html>