<?php
mysql_connect("localhost","root","");
mysql_select_db("web") or die (mysql_error());
//посыл запроса
mysql_query("SET NAMES 'cp1251'") or die (mysql_error());
$result = mysql_query("SELECT * FROM teachers");


mysql_close();
    ?>