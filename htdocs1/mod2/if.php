<form>
    <input type="text" name="age">
    <input type="submit" value="Translate">
</form>
<?php
	$age = $_REQUEST["age"];//выводим на печать в форму
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>Конструкции if-elseif-else</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>
	<h1>Конструкции if-elseif-else</h1>
<?php
	if($age >= 18 and $age <= 59){
		echo "Вам ещё работать и работать";
	}elseif($age > 59){
		echo "Вам пора на пенсию";
	}elseif($age < 18 and $age >= 1){
		echo "Вам ещё рано работать";
	}
	else{
		echo "Неизвестный возраст";
	}
?>
</body>
</html>
