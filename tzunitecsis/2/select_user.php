<?php
include "config1.php";
$first_name = trim($_REQUEST['name1']);

    $sql_select = "SELECT * FROM user WHERE username='$first_name'";
$result = mysql_query($sql_select);
$row = mysql_fetch_array($result);
if($row) {
    printf("<p>Пользователь: " .$row['username'] . " " .$row['userid'] ."</p> ---------<br/>" );
} else{
echo "Пользователя с таким именем в базе нет<br/><br/>";
}
?> 
