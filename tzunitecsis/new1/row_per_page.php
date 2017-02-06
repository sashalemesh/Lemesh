<?php

include "config1.php";
//echo'<pre>';
//var_dump($_POST['name']);
//var_dump($_REQUEST['name']);
//var_dump($_GET['name']);
//echo '</pre>';
if($_REQUEST['name2'] != null and $_REQUEST['name3'] != null) {
//Выводим добавленного пользователя
    $sql_select = "SELECT * FROM user WHERE username='$name3'";
    $result2 = mysql_query($sql_select);
    $row2 = mysql_fetch_array($result2);
}
else {
    //Выводим последнего добавленого пользователя
    $sql_select = "SELECT * FROM user ORDER BY userid DESC LIMIT 1";
    $result2 = mysql_query($sql_select);
    $row2 = mysql_fetch_array($result2);

}
//переходим на страницу, на которой располагается запись с пользователем и подсвечиваем эту строку
$row_per_page = 10;
$all_users = mysql_query("SELECT * FROM user ORDER BY username");
$i = 0;
while ( $user[] = mysql_fetch_array($all_users) ){
    if($user[$i]['username'] == $row2['username'])
        break;
    $i++;
}
$user_row_number = count($user);
$user_page = intval(($user_row_number - 1) / $row_per_page) + 1;


if($row2) {
    $new_user = '<a href="index.php?page='.$user_page.'&id='.$row2['userid'].'">'.
    ("<p>Пользователь: Имя - <b>" .$row2['username'] . "</b> id - <b>" .$row2['userid'] ."</b></p>" ).
    '</a>';

} else{
    $new_user = 'Пользователя с таким именем в базе нет'.'<br/><br/>';
}
