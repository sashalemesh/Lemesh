<?php
	/*
	ЗАДАНИЕ 1
	- Создайте строковую переменную $now
	- Создайте строковую переменную $birthday
	- Присвойте переменной $now значение метки времени актуальной даты(сегодня)
	- Присвойте переменной $birthday значение метки времени Вашего дня рождения
	*/
	$now= time();
	$birthday = mktime(0,0,0,3,30,2017);
	$wer = 	$birthday - $now;
	print_r($now);
	echo '<br>';
	print_r($birthday);
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>Использование функций даты и времени</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>
	<h1>Использование функций даты и времени</h1>
	<?php
	/*
	ЗАДАНИЕ 2
	- Выведите фразу "До моего дня рождения осталось "
	- Выведите количество секунд оставшееся до Вашего дня рождения
	- Закончите фразу " секунд"
	*/
	echo "До моего дня рождения осталось " . $wer ." секунд";
	?>
</body>
</html>
