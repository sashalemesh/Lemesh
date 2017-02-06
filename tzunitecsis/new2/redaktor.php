<?php
include "config1.php";
$name2 = trim(strip_tags($_REQUEST['name2']));//Старое Имя
$name3 = trim(strip_tags($_REQUEST['name3']));//Новое Имя
    //Редактируем пользователя
    $sql_select2 = "UPDATE user SET username='$name3' WHERE username='$name2'";
    $result = mysql_query($sql_select2);
