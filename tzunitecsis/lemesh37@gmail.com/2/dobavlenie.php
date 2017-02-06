<?php
include "config1.php";
//добавляем пользователя
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = trim(strip_tags($_POST['name']));
    $result = mysql_query("INSERT INTO user (username) VALUES ('$name')");
    header("Location: " . $_SERVER["PHP_SELF"]);
    exit;
}
?>