<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
        //if (isset($_POST['name'])) {
        echo 'REQUEST';
//}
        // Переменные с формы
       // if($_POST['name']!= null) {
           //     echo 'POST';

        if($_GET['name'] != '') {
                echo 'Get';
        }
                $name = trim(strip_tags($_POST['name']));
                //setcookie("userName", $name);

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

                $result = mysql_query("INSERT INTO " . $db_table . " (username) VALUES ('$name')");


//        //Выводим данные с Б.Д.
//        $sql_select = "SELECT * FROM user ORDER BY username";
//        $select = mysql_query($sql_select);
//        $row = mysql_fetch_array($select);
//
//        do {
//            $printf = printf("<tr><td>" . $row['username'] . "</td> " . "<td>" . $row['userid']
//                . "</td></tr>");
//        } while ($row = mysql_fetch_array($select));


                if ($result = 'true') {
                        echo "<br>Данные занесены";
                } else {
                        echo "Информация не занесена в базу данных";
                }
                //}
                //header("Location: index.php");//чтобы по F5 не накидали все
                //exit;//чтобы по F5 не накидали все
                //header("Location: ". $_SERVER["PHP_SELF"]);
                //exit;
        //}
}
//else {
//    // Чтение куки
//    $name = strip_tags($_COOKIE["userName"]);
//}
echo "<pre>";
print_r($_POST);
print_r($_GET);
echo "</pre>";
?>

