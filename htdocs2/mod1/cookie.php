<?php
$visitCounterr = 0;
if(isset($_COOKIE["visitCounterr"]))
	$visitCounterr = $_COOKIE["visitCounterr"];
$visitCounterr ++;
if(isset($_COOKIE["lastVisitt"]))
	$lastVisitt = $_COOKIE["lastVisitt"];

setcookie("visitCounterr", $visitCounterr);//0x7FFFFFFF время безконечность
setcookie("lastVisitt", date("d-m-Y H:i:s"));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>Последний визит</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>

<h1>Последний визит</h1>

<?php
if($visitCounterr == 1)
	echo "Добро пожаловать!";
else{
	echo "<p>Вы пришли $visitCounterr раз";
	echo "<p>Последнее посещение $lastVisitt";
}
/*
ЗАДАНИЕ 2
- Выводите информацию о количестве посещений и дате последнего 
посещения
*/
?>

</body>
</html>