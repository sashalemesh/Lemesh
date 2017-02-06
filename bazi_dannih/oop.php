<?php
$mysqli = new mysqli('localhost','root','','user');
$mysqli->query("SET NAMES 'utf8'");

$success = $mysqli->query("INSERT INTO 'my_table' (name,text) VALUES ('vova','pupkin')");
echo $success;
$mysqli->close();