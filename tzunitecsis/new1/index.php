<?php
header("Content-Type:text/html;charset=utf-8");
//Подключение к базе и передача в нее данных
include "dobavlenie.php";
include "redaktor.php";
include "row_per_page.php";
include "index1.php";
//echo $paginate1;
?>
<html>
<head>
    <title>Каталог</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="container">
<form method="POST" class="center-block form-review" action="<?php $_SERVER["PHP_SELF"]?>">
    <h1>Пользователи</h1>
    <label for="name">Имя для добавления:</label><br/>
    <input name="name" class="form-control" type="text" placeholder="Имя"/>

    <input type="submit" class="btn btn-primary btn-block" value="Отправить"/>
</form>

<form method="GET" class="center-block form-review" action="">
    <label for="name2">Имя для редактирования:</label><br/>
    <input name="name2" class="form-control" type="text" placeholder="Старое Имя"/>
    <input name="name3" class="form-control" type="text" placeholder="Новое Имя"/>

    <input type="submit" class="btn btn-primary btn-block" value="Отправить"/>
</form>
<!--Выводим ссылку на добавленного пользователя-->
<ul class="pager">
    <li><?php echo $new_user; ?></li>
</ul>

<div align="center">
<?php
//Проверяем занесены данные в таблицу
echo $dannie;


?>
    </div>
<table border="1" width="40%" align="center">
    <tr>
        <th>Пользователь</th>
        <th>id</th>
    </tr>
    <!-- Устанавливаем соединение с базой данных-->
    <?php
    include "tablicha.php";
    ?>

</table>
    <div align="center">
<ul class="pagination" >
    <?php echo $paginate1; ?>
</ul>
</div>
<?php

//Выводим пагинацию
//echo $paginate;

?>
</div>
<!--Вывод меню -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
