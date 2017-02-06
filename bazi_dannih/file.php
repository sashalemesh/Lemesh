<?php
/*
ЗАДАНИЕ 1
- Установите константу для хранения имени файла
- Проверьте, отправлялась ли форма и корректно ли отправлены данные из формы
- В случае, если форма была отправлена, отфильтруйте полученные значения
- Сформируйте строку для записи с файл
- Откройте соединение с файлом и запишите в него сформированную строку
- Выполните перезапрос текущей страницы (чтобы избавиться от данных, отправленных методом POST)
*/
session_start();
$_SESSION["pages"] .= $_SERVER["PHP_SELF"].'|';
define("USER_LOG","data.txt");
if($_SERVER['REQUEST_METHOD']=="POST"){
		$name = trim(strip_tags($_POST['fname']));
		$age = trim(strip_tags($_POST['lname']));
		$user = "$name $age\n";
		file_put_contents(USER_LOG,$user,FILE_APPEND);
		header("Location: file.php");//чтобы по F5 не накидали все
		exit;//чтобы по F5 не накидали все
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>Работа с файлами</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>

<h1>Заполните форму</h1>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

Имя: <input type="text" name="fname" /><br />
Фамилия: <input type="text" name="lname" /><br />

<br />

<input type="submit" value="Отправить!" />

</form>

<?php
/*
ЗАДАНИЕ 2
- Проверьте, существует ли файл с информацией о пользователях
- Если файл существует, получите все содержимое файла в виде массива строк
- В цикле выведите все строки данного файла с порядковым номером строки
- После этого выведите размер файла в байтах.
*/

/*//Вариант 1
if(file_get_contents("data.txt")){
	$f = file_get_contents("data.txt");
}

$pages = explode('|', $f);
if(is_array($pages)){
	array_pop($pages);
	echo "<ol>";
		foreach($pages as $value){
			echo "<li>$value</li>";
		}
	echo "</ol>";
}*/

if(file_exists(USER_LOG)){
	$users = file(USER_LOG);
	if(is_array($users)){
		$users = array_reverse($users);
			echo "<ol>";
		foreach($users as $user){
			echo "<li>$user</li>";
			}
			echo "</ol>";
	}
}

?>

<?php

if (isset($_POST['fname']) && isset($_POST['lname'])){

	// Переменные с формы
	$name = $_POST['fname'];
	$text = $_POST['lname'];

	// Параметры для подключения
	$db_host = "localhost";
	$db_user = "root"; // Логин БД
	$db_password = ""; // Пароль БД
	$db_table = "my_table"; // Имя Таблицы БД

	// Подключение к базе данных
	$db = mysql_connect($db_host,$db_user,$db_password) OR DIE("Не могу создать соединение ");

	// Выборка базы
	mysql_select_db("user",$db);

	// Установка кодировки соединения
	mysql_query("SET NAMES 'utf8'",$db);

	$result = mysql_query ("INSERT INTO ".$db_table." (name,text) VALUES ('$name','$text')");

	if ($result = 'true'){
		echo "Информация занесена в базу данных";
	}else{
		echo "Информация не занесена в базу данных";
	}
}
//mysql_close($db);
?>

</body>
</html>