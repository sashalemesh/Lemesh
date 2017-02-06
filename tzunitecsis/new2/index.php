<?php
header("Content-Type:text/html;charset=utf-8");
//Подключение к базе и передача в нее данных
include "dobavlenie.php";
include "redaktor.php";
include "row_per_page.php";
//echo $paginate1;
?>
<html>
<head>
    <title>Каталог</title>
</head>
<body>
<h1>Пользователи</h1>
<form method="POST" action="<?php $_SERVER["PHP_SELF"]?>">
    <label for="name">Имя для добавления:</label><br/>
    <input name="name" type="text" placeholder="Имя"/>

    <input type="submit" value="Отправить"/>
</form>

<form method="GET" action="">
    <label for="name2">Имя для редактирования:</label><br/>
    <input name="name2" type="text" placeholder="Старое Имя"/>
    <input name="name3" type="text" placeholder="Новое Имя"/>

    <input type="submit" value="Отправить"/>
</form>


<?php
//выводим ссылку на добавленного пользователя
if($row2) {
    echo '<a href="index.php?page='.$user_page.'&id='.$row2['userid'].'">';
    printf("<p>Пользователь: " .$row2['username'] . " " .$row2['userid'] ."</p>" );
    echo '</a>';
} else{
    echo "Пользователя с таким именем в базе нет<br/><br/>";
}
//Проверяем занесены данные в таблицу
if ($result == true) {
    echo "<br>Данные занесены";
} else {
    echo "Информация не занесена в базу данных";
}
?>
<table border="1" width="40%">
    <tr>
        <th>Пользователь</th>
        <th>id</th>
    </tr>
    <!-- Устанавливаем соединение с базой данных-->
    <?php include "index1.php"; ?>

</table>

<?php

//Выводим пагинацию
echo $paginate;




?>

<!--Вывод меню -->

</body>
</html>
