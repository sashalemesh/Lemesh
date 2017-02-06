<?php
header("Content-Type:text/html;charset=utf-8");
include "config.php";

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

<!--<form method="POST" action="">-->
<!--    <label for="name1">Имя для поиска:</label><br/>-->
<!--    <input name="name1" type="text" placeholder="Имя"/>-->
<!---->
<!--    <input type="submit" value="Отправить"/>-->
<!--</form>-->

<table border="1" width="40%">
    <tr>
        <th>Пользователь</th>
        <th>id</th>
    </tr>
    <!-- Устанавливаем соединение с базой данных-->
    <?php include "index1.php"; ?>

</table>

<a href="#"><?php include "select_user.php";?></a>
<!--Вывод меню -->
<?php echo $paginate;
print_r($_POST);
echo '<br>';
print_r($_REQUEST);
?>
</body>
</html>

