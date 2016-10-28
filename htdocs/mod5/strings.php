<?php
	/*
	«јƒјЌ»≈ 1
	- —оздайте строковую переменную $login и присвойте ей значение "root"
	- —оздайте строковую переменную $password и присвойте ей значение "megaP@ssw0rd"
	- —оздайте строковую переменную $email и присвойте ей значение "ivan@petrov.ru"
	*/
		$login = "root";
		$password = "megaP@ssw0rd";
		$email = "ivan@petrov.ru";
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>»спользование функций обработки строк</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>
	<?php
	$login = ucfirst($login);
	echo $login .'<br>';
		$password = ucfirst($password);
		echo $password .'<br>';
			if (substr_count($email, "@") > 0)
			echo yes;
			else 
				echo no;
	/*
	«јƒјЌ»≈ 2
	- »спользу¤ строковые функции, сделайте первый символ значени¤ переменной 
	$login прописной(большой)
	- »спользу¤ строковые функции, сделайте первый символ значени¤ переменной 
	$password прописной(большой)
	- »спользу¤ строковые функции проверьте, имеет ли значение переменной $email с
	имвол "@"
	*/
	?>
</body>
</html>
